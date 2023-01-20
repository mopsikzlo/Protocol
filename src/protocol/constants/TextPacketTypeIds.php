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

namespace pocketmine\network\mcpe\protocol\constants;

use pocketmine\network\mcpe\protocol\ProtocolInfo;

final class TextPacketTypeIds{
	private function __construct(){
		//NOOP
	}

	public const TEXT_PACKET_TYPE_IDS = [
		ProtocolInfo::PROTOCOL_133 => [
			"TYPE_RAW" => 0,
			"TYPE_CHAT" => 1,
			"TYPE_TRANSLATION" => 2,
			"TYPE_POPUP" => 3,
			"TYPE_JUKEBOX_POPUP" => 4,
			"TYPE_TIP" => 5,
			"TYPE_SYSTEM" => 6,
			"TYPE_WHISPER" => 7,
			"TYPE_ANNOUNCEMENT" => 8,
			"TYPE_JSON" => 9
		],
		ProtocolInfo::PROTOCOL_90 => [
			"TYPE_RAW" => 0,
			"TYPE_CHAT" => 1,
			"TYPE_TRANSLATION" => 2,
			"TYPE_POPUP" => 3,
			"TYPE_TIP" => 4,
			"TYPE_SYSTEM" => 5,
			"TYPE_WHISPER" => 6,
			"TYPE_ANNOUNCEMENT" => 7
		]
	];
}
