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

use pocketmine\network\mcpe\protocol\constants\ConstantManager;
use pocketmine\network\mcpe\protocol\constants\magic\PacketIds100;
use pocketmine\network\mcpe\protocol\constants\magic\PacketIds105;
use pocketmine\network\mcpe\protocol\constants\magic\PacketIds110;
use pocketmine\network\mcpe\protocol\constants\magic\PacketIds130;
use pocketmine\network\mcpe\protocol\constants\magic\PacketIds280;
use pocketmine\network\mcpe\protocol\constants\magic\PacketIds310;
use pocketmine\network\mcpe\protocol\constants\magic\PacketIds331;
use pocketmine\network\mcpe\protocol\constants\magic\PacketIds360;
use pocketmine\network\mcpe\protocol\constants\magic\PacketIds385;
use pocketmine\network\mcpe\protocol\constants\magic\PacketIds387;
use pocketmine\network\mcpe\protocol\constants\magic\PacketIds81;
use pocketmine\network\mcpe\protocol\constants\magic\PacketIds91;
use pocketmine\network\mcpe\protocol\constants\PacketMagicNumbers;
use function array_keys;

final class PacketUtils{
	private const PROTOCOL_POOL = [
		ProtocolInfo::PROTOCOL_387 => PacketIds387::class,
		ProtocolInfo::PROTOCOL_385 => PacketIds385::class,
		ProtocolInfo::PROTOCOL_360 => PacketIds360::class,
		ProtocolInfo::PROTOCOL_331 => PacketIds331::class,
		ProtocolInfo::PROTOCOL_310 => PacketIds310::class,
		ProtocolInfo::PROTOCOL_280 => PacketIds280::class,
		ProtocolInfo::PROTOCOL_130 => PacketIds130::class,
		ProtocolInfo::PROTOCOL_110 => PacketIds110::class,
		ProtocolInfo::PROTOCOL_105 => PacketIds105::class,
		ProtocolInfo::PROTOCOL_100 => PacketIds100::class,
		ProtocolInfo::PROTOCOL_91 => PacketIds91::class,
		ProtocolInfo::PROTOCOL_81 => PacketIds81::class
	];

	public const MAGIC = ConstantManager::class;

	/** @var \SplFixedArray<int>[] */
	protected static $magicPoolTo = null;
	/** @var \SplFixedArray<int>[] */
	protected static $magicPoolFrom = null;
	/** @var int[] */
	protected static $protocolList = null;

	public static function init() : void{
		$magicNumbers = (new \ReflectionClass(PacketMagicNumbers::class))->getConstants();
		self::$magicPoolTo = [];
		self::$magicPoolFrom = [];
		self::$protocolList = ProtocolInfo::filterUnusedProtocols(array_keys(self::PROTOCOL_POOL));
		foreach(self::$protocolList as $protocol){
			$protocolInfoClass = self::PROTOCOL_POOL[$protocol];
			$protocolMagicNumbers = (new \ReflectionClass($protocolInfoClass))->getConstants();
			self::$magicPoolTo[$protocol] = new \SplFixedArray(256);
			self::$magicPoolFrom[$protocol] = new \SplFixedArray(256);
			foreach($protocolMagicNumbers as $name => $magic){
				if(isset($magicNumbers[$name])){
					self::$magicPoolTo[$protocol][$magicNumbers[$name]] = $magic;
					self::$magicPoolFrom[$protocol][$magic] = $magicNumbers[$name];
				}else{
					throw new \InvalidArgumentException("Packet $name not founded in magic numbers class.($protocolInfoClass $magic)");
				}
			}
		}
	}

	public static function convertProtocol(int $playerProtocol) : int{
		foreach(self::$protocolList as $poolProtocol){
			if($playerProtocol >= $poolProtocol){
				return $poolProtocol;
			}
		}

		throw new \RuntimeException("Packet utils has no one protocol");
	}

	public static function getFromClosure(int $packetPoolProtocol) : \Closure{
		$pool = self::$magicPoolFrom[$packetPoolProtocol];
		return function(int $packetId) use ($pool) : int{
			return $pool[$packetId] ?? 0;
		};
	}

	public static function getToClosure(int $packetPoolProtocol) : \Closure{
		$pool = self::$magicPoolTo[$packetPoolProtocol];
		return function(int $packetMagic) use ($pool) : int{
			return $pool[$packetMagic] ?? 0;
		};
	}
}

PacketUtils::init();
