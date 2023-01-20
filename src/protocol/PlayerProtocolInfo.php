<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\network\mcpe\protocol;

use pocketmine\network\mcpe\utils\ActorMetadataConvertor;

final class PlayerProtocolInfo{
	/** @var PlayerProtocolInfo[] */
	private static $infos = [];

	public static function get(int $protocol) : self{
		return isset(self::$infos[$protocol]) ? self::$infos[$protocol] : (self::$infos[$protocol] = new self($protocol));
	}

	public static function getDefault() : self{
		return self::get(ProtocolInfo::CURRENT_PROTOCOL);
	}

	/** @var int */
	private $protocol;
	/** @var int */
	private $networkProtocol;

	/** @var \Closure */
	private $packetPoolFrom;
	/** @var \Closure */
	private $packetPoolTo;

	/** @var \Closure */
	private $actorMetadataProperties;
	/** @var \Closure */
	private $actorMetadataRollbackProperties;

	/** @var \Closure */
	private $actorMetadataFlags;
	/** @var \Closure */
	private $actorMetadataRollbackFlags;

	public function __construct(int $protocol){
		$this->protocol = $protocol;
		$this->networkProtocol = ProtocolInfo::convertProtocol($protocol);

		$packetPoolProtocol = PacketUtils::convertProtocol($this->networkProtocol);
		$this->packetPoolFrom = PacketUtils::getFromClosure($packetPoolProtocol);
		$this->packetPoolTo = PacketUtils::getToClosure($packetPoolProtocol);

		$this->actorMetadataProperties = ActorMetadataConvertor::getMetadataProperties($protocol, false);
		$this->actorMetadataRollbackProperties = ActorMetadataConvertor::getMetadataProperties($protocol, true);

		$this->actorMetadataFlags = ActorMetadataConvertor::getMetadataFlags($protocol, false);
		$this->actorMetadataRollbackFlags = ActorMetadataConvertor::getMetadataFlags($protocol, true);
	}


	public function getProtocol() : int{
		return $this->protocol;
	}

	public function getNetworkProtocol() : int{
		return $this->networkProtocol;
	}


	public function getPacketMagicById(int $packetId) : int{
		return ($this->packetPoolFrom)($packetId);
	}

	public function getPacketIdByMagic(int $packetMagic) : int{
		return ($this->packetPoolTo)($packetMagic);
	}

	/**
	 * @param mixed[] $metadataProperties
	 *
	 * @return mixed[]
	 */
	public function convertMetadataProperties(array $metadataProperties) : array{
		return ($this->actorMetadataProperties)($metadataProperties);
	}

	/**
	 * @param mixed[] $metadataProperties
	 *
	 * @return mixed[]
	 */
	public function rollbackMetadataProperties(array $metadataProperties) : array{
		return ($this->actorMetadataRollbackProperties)($metadataProperties);
	}


	public function convertMetadataFlags(?int &$flags, ?int &$flags2) : void{
		($this->actorMetadataFlags)($flags, $flags2);
	}

	public function rollbackMetadataFlags(?int &$flags, ?int &$flags2) : void{
		($this->actorMetadataRollbackFlags)($flags, $flags2);
	}
}
