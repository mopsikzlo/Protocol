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

namespace pocketmine\network\mcpe\utils;

use pocketmine\network\mcpe\protocol\constants\ActorMetadataList;
use pocketmine\network\mcpe\protocol\ProtocolInfo;
use function array_keys;
use function array_search;
use function decbin;
use function max;
use function strlen;
use function strrev;

final class ActorMetadataConvertor{
	private function __construct(){
		//NOOP
	}

	/** @var \SplFixedArray<int>[] */
	public static $actorMetadataProperties = [];
	/** @var \SplFixedArray<int>[] */
	public static $actorMetadataFlags = [];

	/**
	 * @param int[] $usedProperties
	 * @param int[] $usedFlags
	 * @phpstan-param array<string, int> $usedProperties
	 * @phpstan-param array<string, int> $usedFlags
	 */
	public static function init(array $usedProperties, array $usedFlags) : void{
		$lastFlags = null;
		foreach(ProtocolInfo::filterUnusedProtocols(array_keys(ActorMetadataList::FLAGS)) as $protocol){
			$flags = ActorMetadataList::FLAGS[$protocol];
			self::$actorMetadataFlags[$protocol] = new \SplFixedArray(max($usedFlags) + 1);

			if($lastFlags !== null){
				foreach($flags as $flagName => $magic){
					if(($old = array_search($magic, $lastFlags, true)) !== false){
						unset($lastFlags[$old]);
					}

					$lastFlags[$flagName] = $magic;
				}

				$flags = $lastFlags;
			}

			foreach($usedFlags as $flagName => $magic){
				if(isset($flags[$flagName])){
					self::$actorMetadataFlags[$protocol][$magic] = $flags[$flagName];
				}
			}

			$lastFlags = $flags;
		}

		$lastProperties = null;
		foreach(ProtocolInfo::filterUnusedProtocols(array_keys(ActorMetadataList::METADATA)) as $protocol){
			$properties = ActorMetadataList::METADATA[$protocol];
			self::$actorMetadataProperties[$protocol] = new \SplFixedArray(max($usedProperties) + 1);

			if($lastProperties !== null){
				foreach($properties as $propertyName => $magic){
					if(($old = array_search($magic, $lastProperties, true)) !== false){
						unset($lastProperties[$old]);
					}

					$lastProperties[$propertyName] = $magic;
				}

				$properties = $lastProperties;
			}

			foreach($usedProperties as $propertyName => $magic){
				if(isset($properties[$propertyName])){
					self::$actorMetadataProperties[$protocol][$magic] = $properties[$propertyName];
				}
			}

			$lastProperties = $properties;
		}

		krsort(self::$actorMetadataFlags);
		krsort(self::$actorMetadataProperties);
	}

	public static function getMetadataProperties(int $protocol, bool $rollback = false) : \Closure{
		foreach(self::$actorMetadataProperties as $metadataProtocol => $protocolMetadataProperties){
			if($protocol >= $metadataProtocol){
				break;
			}
		}

		if(!isset($protocolMetadataProperties)){
			return function(array $metadataProperties) : array{
				return $metadataProperties;
			};
		}

		if($rollback){
			$protocolMetadataProperties = $protocolMetadataProperties->toArray();
			return function(array $metadataProperties) use ($protocolMetadataProperties) : array{
				$newMetadataProperties = [];

				foreach($metadataProperties as $magic => $value){
					if(($newIndex = array_search($magic, $protocolMetadataProperties, true)) !== false){
						$newMetadataProperties[$newIndex] = $value;
					}
				}

				return $newMetadataProperties;
			};
		}else{
			return function(array $metadataProperties) use ($protocolMetadataProperties) : array{
				$newMetadataProperties = [];

				/** @var int $magic */
				foreach($metadataProperties as $magic => $value){
					if(isset($protocolMetadataProperties[$magic])){
						$newMetadataProperties[$protocolMetadataProperties[$magic]] = $value;
					}
				}

				return $newMetadataProperties;
			};
		}
	}

	public static function getMetadataFlags(int $protocol, bool $rollback = false) : \Closure{
		foreach(self::$actorMetadataFlags as $metadataProtocol => $protocolMetadataFlags){
			if($protocol >= $metadataProtocol){
				break;
			}
		}

		if(!isset($protocolMetadataFlags)){
			return function(?int &$flags, ?int &$flags2) : void{

			};
		}

		if($rollback){
			$protocolMetadataFlags = $protocolMetadataFlags->toArray();
			return function(?int &$flags, ?int &$flags2) use ($protocolMetadataFlags) : void{
				$newFlags = null;
				$newFlags2 = null;
				if($flags !== null){
					$newFlags = 0;
					$flagsBinary = strrev(decbin($flags));

					for($i = 0, $len = strlen($flagsBinary); $i < $len; ++$i){
						if($flagsBinary[$i] === "1"){
							$flag = array_search($i, $protocolMetadataFlags, true);
							if($flag !== false){
								if($flag >= 64){
									$newFlags2 |= (1 << ($flag % 64));
								}else{
									$newFlags |= (1 << $flag);
								}
							}
						}
					}
				}

				if($flags2 !== null){
					$newFlags2 = 0;
					$flagsBinary = strrev(decbin($flags2));

					for($i = 0, $len = strlen($flagsBinary); $i < $len; ++$i){
						if($flagsBinary[$i] === "1"){
							$flag = array_search($i, $protocolMetadataFlags, true);
							if($flag !== false){
								if($flag >= 64){
									$newFlags2 |= (1 << ($flag % 64));
								}else{
									$newFlags |= (1 << $flag);
								}
							}
						}
					}
				}

				$flags = $newFlags;
				$flags2 = $newFlags2;
			};
		}else{
			return function(?int &$flags, ?int &$flags2) use ($protocolMetadataFlags) : void{
				$newFlags = null;
				$newFlags2 = null;
				if($flags !== null){
					$newFlags = 0;
					$flagsBinary = strrev(decbin($flags));

					for($i = 0, $len = strlen($flagsBinary); $i < $len; ++$i){
						if($flagsBinary[$i] === "1" and isset($protocolMetadataFlags[$i])){
							$flag = $protocolMetadataFlags[$i];
							if($flag >= 64){
								$newFlags2 |= (1 << ($flag % 64));
							}else{
								$newFlags |= (1 << $flag);
							}
						}
					}
				}

				if($flags2 !== null){
					$newFlags2 = 0;
					$flagsBinary = strrev(decbin($flags2));

					for($i = 0, $len = strlen($flagsBinary); $i < $len; ++$i){
						if($flagsBinary[$i] === "1" and isset($protocolMetadataFlags[$i])){
							$flag = $protocolMetadataFlags[$i];
							if($flag >= 64){
								$newFlags2 |= (1 << ($flag % 64));
							}else{
								$newFlags |= (1 << $flag);
							}
						}
					}
				}

				$flags = $newFlags;
				$flags2 = $newFlags2;
			};
		}
	}
}
