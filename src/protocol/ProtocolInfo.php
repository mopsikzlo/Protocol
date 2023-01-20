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

use pocketmine\network\mcpe\protocol\constants\PacketMagicNumbers;

final class ProtocolInfo implements PacketMagicNumbers{
	private function __construct(){
		//NOOP
	}

	/**
	 * NOTE TO DEVELOPERS
	 * Do not waste your time or ours submitting pull requests changing game and/or protocol version numbers.
	 * Pull requests changing game and/or protocol version numbers will be closed.
	 *
	 * This file is generated automatically, do not edit it manually.
	 */

	/**
	 * "Actual" Minecraft: PE protocol version
	 */
	public const CURRENT_PROTOCOL = 100;
	/**
	 * Current Minecraft PE version reported by the server. This is usually the earliest currently supported version.
	 */
	public const MINECRAFT_VERSION = 'v1.X';
	/**
	 * Version number sent to clients in ping responses.
	 */
	public const MINECRAFT_VERSION_NETWORK = '';

	/**
	 * List of supported Minecraft: PE protocol versions
	 */
	public const ACCEPTED_PROTOCOLS = [
		self::PROTOCOL_91,
		self::PROTOCOL_92,
		self::PROTOCOL_100,
		self::PROTOCOL_101,
		self::PROTOCOL_105,
		self::PROTOCOL_106,
		self::PROTOCOL_107,
		self::PROTOCOL_110,
		self::PROTOCOL_111,
		self::PROTOCOL_112,
		self::PROTOCOL_113,
		self::PROTOCOL_130,
		self::PROTOCOL_131,
		self::PROTOCOL_132,
		self::PROTOCOL_133,
		self::PROTOCOL_134,
		self::PROTOCOL_135,
		self::PROTOCOL_136,
		self::PROTOCOL_137,
		self::PROTOCOL_140,
		self::PROTOCOL_141,
		self::PROTOCOL_150,
		self::PROTOCOL_160,
		self::PROTOCOL_200,
		self::PROTOCOL_201,
		self::PROTOCOL_220,
		self::PROTOCOL_221,
		self::PROTOCOL_222,
		self::PROTOCOL_223,
		self::PROTOCOL_224,
		self::PROTOCOL_240,
		self::PROTOCOL_250,
		self::PROTOCOL_260,
		self::PROTOCOL_261,
		self::PROTOCOL_270,
		self::PROTOCOL_271,
		self::PROTOCOL_273,
		self::PROTOCOL_274,
		self::PROTOCOL_280,
		self::PROTOCOL_281,
		self::PROTOCOL_282,
		self::PROTOCOL_290,
		self::PROTOCOL_291,
		self::PROTOCOL_310,
		self::PROTOCOL_311,
		self::PROTOCOL_312,
		self::PROTOCOL_313,
		self::PROTOCOL_330,
		self::PROTOCOL_331,
		self::PROTOCOL_332,
		self::PROTOCOL_340,
		self::PROTOCOL_342,
		self::PROTOCOL_350,
		self::PROTOCOL_351,
		self::PROTOCOL_352,
		self::PROTOCOL_353,
		self::PROTOCOL_354,
		self::PROTOCOL_360,
		self::PROTOCOL_361,
		self::PROTOCOL_370,
		self::PROTOCOL_371,
		self::PROTOCOL_385,
		self::PROTOCOL_386,
		self::PROTOCOL_387,
		self::PROTOCOL_388,
		self::PROTOCOL_389,
		self::PROTOCOL_390,
		self::PROTOCOL_392,
		self::PROTOCOL_393,
		self::PROTOCOL_394,
		self::PROTOCOL_395,
		self::PROTOCOL_396,
		self::PROTOCOL_400,
		self::PROTOCOL_401,
	];

	//TODO: MORE PROTOCOLS AND VERSIONS

	/** 0.2.0.0 */
	public const PROTOCOL_2 = 2;
	/** 0.2.1.0, 0.2.2.0 */
	public const PROTOCOL_3 = 3;
	/** 0.3.0.0 */
	public const PROTOCOL_4 = 4;
	/** 0.3.2.0 */
	public const PROTOCOL_5 = 5;
	/** 0.3.3.0 */
	public const PROTOCOL_6 = 6;
	/** 0.4.0.0 */
	public const PROTOCOL_7 = 7;
	/** 0.5.0.0 */
	public const PROTOCOL_8 = 8;
	/** 0.6.0.0, 0.6.1.0 */
	public const PROTOCOL_9 = 9;
	/** 0.7.0.0 */
	public const PROTOCOL_11 = 11;
	/** 0.7.4.0 */
	public const PROTOCOL_12 = 12;
	/** 0.8.1.0 */
	public const PROTOCOL_14 = 14;
	/** 0.9.0.2 */
	public const PROTOCOL_15 = 15;
	/** 0.9.0.7 */
	public const PROTOCOL_16 = 16;
	/** 0.9.0.12 */
	public const PROTOCOL_17 = 17;
	/** 0.9.5.0 */
	public const PROTOCOL_18 = 18;
	/** 0.10.0.1 */
	public const PROTOCOL_19 = 19;
	/** 0.10.0.6 */
	public const PROTOCOL_20 = 20;
	/** 0.11.0.1 */
	public const PROTOCOL_21 = 21;
	/** 0.11.0.4 */
	public const PROTOCOL_22 = 22;
	/** 0.11.0.5 */
	public const PROTOCOL_23 = 23;
	/** 0.11.0.7 */
	public const PROTOCOL_24 = 24;
	/** 0.11.0.8 */
	public const PROTOCOL_25 = 25;
	/** 0.11.0.11 */
	public const PROTOCOL_26 = 26;
	/** 0.11.0.14 */
	public const PROTOCOL_27 = 27;
	/** 0.13.0.1, 0.13.0.2 */
	public const PROTOCOL_37 = 37;
	/** 0.13.0.3, 0.13.0.4 */
	public const PROTOCOL_38 = 38;
	/** 0.13.2.0 */
	public const PROTOCOL_39 = 39;
	/** 0.14.0.1 */
	public const PROTOCOL_41 = 41;
	/** 0.14.0.3 */
	public const PROTOCOL_42 = 42;
	/** 0.14.0.4, 0.14.0.5 */
	public const PROTOCOL_43 = 43;
	/** 0.14.0.6 */
	public const PROTOCOL_44 = 44;
	/** 0.14.0.7 */
	public const PROTOCOL_45 = 45;
	/** 0.14.2.0 */
	public const PROTOCOL_60 = 60;
	/** 0.14.3.0 */
	public const PROTOCOL_70 = 70;
	/** 0.15.0.0 */
	public const PROTOCOL_81 = 81;
	/** 0.15.4.0 */
	public const PROTOCOL_82 = 82;
	/** 0.15.9.0 */
	public const PROTOCOL_83 = 83;
	/** 0.15.10.0 */
	public const PROTOCOL_84 = 84;
	/** 0.15.90.1 */
	public const PROTOCOL_90 = 90;
	/** 0.16.0.5 */
	public const PROTOCOL_91 = 91;
	/** 0.17.0.2 */
	public const PROTOCOL_92 = 92;
	/** 1.0.0.0 */
	public const PROTOCOL_100 = 100;
	/** 1.0.3.0 */
	public const PROTOCOL_101 = 101;
	/** 1.0.4.1 */
	public const PROTOCOL_102 = 102;
	/** 1.0.5.0 */
	public const PROTOCOL_105 = 105;
	/** 1.0.6.0 */
	public const PROTOCOL_106 = 106;
	/** 1.0.7.0 */
	public const PROTOCOL_107 = 107;
	/** 1.0.8.0 */
	public const PROTOCOL_108 = 108;
	/** 1.1.0.0, 1.1.0.3, 1.1.0.5 */
	public const PROTOCOL_110 = 110; // A very broken version, TODO: Add support it
	/** 1.1.0.8 */
	public const PROTOCOL_111 = 111;
	/** 1.1.0.9 */
	public const PROTOCOL_112 = 112;
	/** 1.1.0.55 and other */
	public const PROTOCOL_113 = 113;
	/** 1.2.0.2 */
	public const PROTOCOL_130 = 130;
	/** 1.2.0.7 */
	public const PROTOCOL_131 = 131;
	/** 1.2.0.15 */
	public const PROTOCOL_132 = 132;
	/** 1.2.0.18 */
	public const PROTOCOL_133 = 133;
	/** 1.2.0.20, 1.2.0.22 */
	public const PROTOCOL_134 = 134;
	/** 1.2.0.24, 1.2.0.25 */
	public const PROTOCOL_135 = 135;
	/** 1.2.0.31 */
	public const PROTOCOL_136 = 136;
	/** 1.2.0.0 */
	public const PROTOCOL_137 = 137;
	/** 1.2.5.11 */
	public const PROTOCOL_140 = 140;
	/** 1.2.5.x */
	public const PROTOCOL_141 = 141;
	/** 1.2.6.0 */
	public const PROTOCOL_150 = 150;
	/** 1.2.7, 1.2.8 */
	public const PROTOCOL_160 = 160;
	/** 1.2.10 */
	public const PROTOCOL_200 = 200;
	/** 1.2.10.x */
	public const PROTOCOL_201 = 201;
	/** 1.2.13.5 */
	public const PROTOCOL_220 = 220;
	/** 1.2.13.8 */
	public const PROTOCOL_221 = 221;
	/** 1.2.13.10 */
	public const PROTOCOL_222 = 222;
	/** 1.2.13.54 */
	public const PROTOCOL_223 = 223;
	/** 1.2.13.11 */
	public const PROTOCOL_224 = 224;
	/** 1.2.14.2 */
	public const PROTOCOL_240 = 240;
	/** 1.2.15.1 */
	public const PROTOCOL_250 = 250;
	/** 1.2.20.1, 1.2.20.2 */
	public const PROTOCOL_260 = 260;
	/** 1.4.0.0 */
	public const PROTOCOL_261 = 261;
	/** 1.5.0.0 */
	public const PROTOCOL_270 = 270;
	/** 1.5.0.1, 1.5.0.4 */
	public const PROTOCOL_271 = 271;
	/** 1.5.0.7 */
	public const PROTOCOL_273 = 273;
	/** 1.5.0.10 */
	public const PROTOCOL_274 = 274;
	/** 1.6.0.1 */
	public const PROTOCOL_280 = 280;
	/** 1.6.0.5, 1.6.0.6 */
	public const PROTOCOL_281 = 281;
	/** 1.6.0.8, 1.6.0.30 */
	public const PROTOCOL_282 = 282;
	/** 1.7.0.2, 1.7.0.3 */
	public const PROTOCOL_290 = 290;
	/** 1.7.0.5, 1.7.0.7, 1.7.0.9 */
	public const PROTOCOL_291 = 291;
	/** 1.8.0.4, 1.8.0.8 */
	public const PROTOCOL_310 = 310;
	/** 1.8.0.9, 1.8.0.10 */
	public const PROTOCOL_311 = 311;
	/** 1.8.0.11, 1.8.0.13, 1.8.0.14 */
	public const PROTOCOL_312 = 312;
	/** 1.8.0 */
	public const PROTOCOL_313 = 313;
	/** 1.9.0.0 */
	public const PROTOCOL_330 = 330;
	/** 1.9.0.2 */
	public const PROTOCOL_331 = 331;
	/** 1.9.0.3, 1.9.0.5 */
	public const PROTOCOL_332 = 332;
	/** 1.10.0.3, 1.10.0.4 */
	public const PROTOCOL_340 = 340;
	/** 1.10.0 */
	public const PROTOCOL_342 = 342;
	/** 1.11.0.1 */
	public const PROTOCOL_350 = 350;
	/** 1.11.0.3 */
	public const PROTOCOL_351 = 351;
	/** 1.11.0.4 */
	public const PROTOCOL_352 = 352;
	/** 1.11.0.5 */
	public const PROTOCOL_353 = 353;
	/** 1.11.0.7, 1.11.0.8, 1.11.0.9, 1.11.0.10, 1.11.1, 1.11.2, 1.11.3 */
	public const PROTOCOL_354 = 354;
	/** 1.12.0.2 */
	public const PROTOCOL_360 = 360;
	/** 1.12.0.3, 1.12.0.4, 1.12.0.5, 1.12.0.6, 1.12.0.9, 1.12.0.10, 1.12.0.11, 1.12.0.12, 1.12.0.13, 1.12.0.14, 1.12.0.28 */
	public const PROTOCOL_361 = 361;
	/** 1.13.0.1, 1.13.0.2, 1.13.0.3 */
	public const PROTOCOL_370 = 370;
	/** 1.13.0.4, 1.13.0.5, 1.13.0.6 */
	public const PROTOCOL_371 = 371;
	/** 1.13.0.7, 1.13.0.9, 1.13.0.10 */
	public const PROTOCOL_385 = 385;
	/** 1.13.0.12, 1.13.0.13 */
	public const PROTOCOL_386 = 386;
	/** 1.13.0.15 */
	public const PROTOCOL_387 = 387;
	/** 1.13.0.25 */
	public const PROTOCOL_388 = 388;
	/** 1.13.0.18 */
	public const PROTOCOL_389 = 389;
	/** 1.14.0.1 */
	public const PROTOCOL_390 = 390;
	/** 1.15.0.51 */
	public const PROTOCOL_392 = 392;
	/** 1.15.0.53 */
	public const PROTOCOL_393 = 393;
	/** 1.15.0.54 */
	public const PROTOCOL_394 = 394;
	/** 1.15.0.55 */
	public const PROTOCOL_395 = 395;
	/** 1.15.0.56 */
	public const PROTOCOL_396 = 396;
	/** 1.16.0.51 */
	public const PROTOCOL_400 = 400;
	/** 1.16.0.idk */
	public const PROTOCOL_401 = 401;

	/** @var int[] */
	private static $ACCEPTED_PROTOCOLS = self::ACCEPTED_PROTOCOLS;

	public static function convertProtocol(int $protocol) : int{
		switch($protocol){
			case ProtocolInfo::PROTOCOL_401:
			case ProtocolInfo::PROTOCOL_400:
				return ProtocolInfo::PROTOCOL_400;
			case ProtocolInfo::PROTOCOL_396:
			case ProtocolInfo::PROTOCOL_395:
			case ProtocolInfo::PROTOCOL_394:
			case ProtocolInfo::PROTOCOL_393:
				return ProtocolInfo::PROTOCOL_393;
			case ProtocolInfo::PROTOCOL_392:
				return ProtocolInfo::PROTOCOL_392;
			case ProtocolInfo::PROTOCOL_390:
				return ProtocolInfo::PROTOCOL_390;
			case ProtocolInfo::PROTOCOL_389:
			case ProtocolInfo::PROTOCOL_388:
				return ProtocolInfo::PROTOCOL_388;
			case ProtocolInfo::PROTOCOL_387:
				return ProtocolInfo::PROTOCOL_387;
			case ProtocolInfo::PROTOCOL_386:
				return ProtocolInfo::PROTOCOL_386;
			case ProtocolInfo::PROTOCOL_385:
				return ProtocolInfo::PROTOCOL_385;
			case ProtocolInfo::PROTOCOL_371:
			case ProtocolInfo::PROTOCOL_370:
				return ProtocolInfo::PROTOCOL_370;
			case ProtocolInfo::PROTOCOL_361:
				return ProtocolInfo::PROTOCOL_361;
			case ProtocolInfo::PROTOCOL_360:
				return ProtocolInfo::PROTOCOL_360;
			case ProtocolInfo::PROTOCOL_354:
				return ProtocolInfo::PROTOCOL_354;
			case ProtocolInfo::PROTOCOL_353:
			case ProtocolInfo::PROTOCOL_352:
			case ProtocolInfo::PROTOCOL_351:
				return ProtocolInfo::PROTOCOL_351;
			case ProtocolInfo::PROTOCOL_350:
				return ProtocolInfo::PROTOCOL_350;
			case ProtocolInfo::PROTOCOL_342:
				return ProtocolInfo::PROTOCOL_342;
			case ProtocolInfo::PROTOCOL_340:
				return ProtocolInfo::PROTOCOL_340;
			case ProtocolInfo::PROTOCOL_332:
				return ProtocolInfo::PROTOCOL_332;
			case ProtocolInfo::PROTOCOL_331:
				return ProtocolInfo::PROTOCOL_331;
			case ProtocolInfo::PROTOCOL_330:
				return ProtocolInfo::PROTOCOL_330;
			case ProtocolInfo::PROTOCOL_313:
			case ProtocolInfo::PROTOCOL_312:
			case ProtocolInfo::PROTOCOL_311:
				return ProtocolInfo::PROTOCOL_311;
			case ProtocolInfo::PROTOCOL_310:
				return ProtocolInfo::PROTOCOL_310;
			case ProtocolInfo::PROTOCOL_291:
			case ProtocolInfo::PROTOCOL_290:
				return ProtocolInfo::PROTOCOL_290;
			case ProtocolInfo::PROTOCOL_282:
				return ProtocolInfo::PROTOCOL_282;
			case ProtocolInfo::PROTOCOL_281:
			case ProtocolInfo::PROTOCOL_280:
				return ProtocolInfo::PROTOCOL_280;
			case ProtocolInfo::PROTOCOL_274:
				return ProtocolInfo::PROTOCOL_274;
			case ProtocolInfo::PROTOCOL_273:
				return ProtocolInfo::PROTOCOL_273;
			case ProtocolInfo::PROTOCOL_271:
				return ProtocolInfo::PROTOCOL_271;
			case ProtocolInfo::PROTOCOL_270:
			case ProtocolInfo::PROTOCOL_261:
			case ProtocolInfo::PROTOCOL_260:
				return ProtocolInfo::PROTOCOL_260;
			case ProtocolInfo::PROTOCOL_250:
			case ProtocolInfo::PROTOCOL_240:
				return ProtocolInfo::PROTOCOL_240;
			case ProtocolInfo::PROTOCOL_224:
			case ProtocolInfo::PROTOCOL_223:
			case ProtocolInfo::PROTOCOL_222:
			case ProtocolInfo::PROTOCOL_221:
				return ProtocolInfo::PROTOCOL_221;
			case ProtocolInfo::PROTOCOL_220:
				return ProtocolInfo::PROTOCOL_220;
			case ProtocolInfo::PROTOCOL_200:
				return ProtocolInfo::PROTOCOL_200;
			case ProtocolInfo::PROTOCOL_201: // Wrong, but "why not"?
			case ProtocolInfo::PROTOCOL_160:
			case ProtocolInfo::PROTOCOL_150:
			case ProtocolInfo::PROTOCOL_141:
			case ProtocolInfo::PROTOCOL_140:
				return ProtocolInfo::PROTOCOL_140;
			case ProtocolInfo::PROTOCOL_137:
			case ProtocolInfo::PROTOCOL_136:
				return ProtocolInfo::PROTOCOL_136;
			case ProtocolInfo::PROTOCOL_135:
				return ProtocolInfo::PROTOCOL_135;
			case ProtocolInfo::PROTOCOL_134:
				return ProtocolInfo::PROTOCOL_134;
			case ProtocolInfo::PROTOCOL_133:
				return ProtocolInfo::PROTOCOL_133;
			case ProtocolInfo::PROTOCOL_132:
				return ProtocolInfo::PROTOCOL_132;
			case ProtocolInfo::PROTOCOL_131:
				return ProtocolInfo::PROTOCOL_131;
			case ProtocolInfo::PROTOCOL_130:
				return ProtocolInfo::PROTOCOL_130;
			case ProtocolInfo::PROTOCOL_113:
				return ProtocolInfo::PROTOCOL_113;
			case ProtocolInfo::PROTOCOL_112:
				return ProtocolInfo::PROTOCOL_112;
			case ProtocolInfo::PROTOCOL_111:
				return ProtocolInfo::PROTOCOL_111;
			case ProtocolInfo::PROTOCOL_110:
				return ProtocolInfo::PROTOCOL_110;
			case ProtocolInfo::PROTOCOL_101:
			case ProtocolInfo::PROTOCOL_100:
				return ProtocolInfo::PROTOCOL_100;
			case ProtocolInfo::PROTOCOL_107:
			case ProtocolInfo::PROTOCOL_106:
			case ProtocolInfo::PROTOCOL_105:
				return ProtocolInfo::PROTOCOL_105;
			case ProtocolInfo::PROTOCOL_92:
				return ProtocolInfo::PROTOCOL_92;
			case ProtocolInfo::PROTOCOL_91:
				return ProtocolInfo::PROTOCOL_91;
			case ProtocolInfo::PROTOCOL_90:
				return ProtocolInfo::PROTOCOL_90;
			default:
				return ProtocolInfo::PROTOCOL_100;
		}
	}

	/**
	 * @return int[]
	 */
	public static function getAcceptedProtocols() : array{
		return self::$ACCEPTED_PROTOCOLS;
	}

	public static function getStringAcceptedProtocols() : string{
		return implode(", ", self::$ACCEPTED_PROTOCOLS);
	}

	/**
	 * @return int[]
	 */
	public static function getDisacceptedProtocols() : array{
		return array_diff(self::ACCEPTED_PROTOCOLS, self::$ACCEPTED_PROTOCOLS);
	}

	/**
	 * @param int[] $acceptedProtocols
	 */
	public static function setAcceptedProtocols(array $acceptedProtocols) : void{
		self::$ACCEPTED_PROTOCOLS = $acceptedProtocols;
	}

	/**
	 * @param int[] $protocols
	 *
	 * @return int[]
	 */
	public static function filterUnusedProtocols(array $protocols) : array{
		return array_diff($protocols, self::getDisacceptedProtocols());
	}
}
