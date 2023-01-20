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

final class ResourcePackTypeIds{
	private function __construct(){
		//NOOP
	}

	public const RESOURCE_PACK_TYPE_IDS = [
		ProtocolInfo::PROTOCOL_370 => [
			"TYPE_INVALID" => 0,
			"TYPE_ADDON" => 1,
			"TYPE_CACHED" => 2,
			"TYPE_COPY_PROTECTED" => 3,
			"TYPE_BEHAVIOR" => 4,
			"TYPE_PERSONA_PIECE" => 5,
			"TYPE_RESOURCE" => 6,
			"TYPE_SKINS" => 7,
			"TYPE_WORLD_TEMPLATE" => 8,
			"TYPE_COUNT" => 9
		],
		ProtocolInfo::PROTOCOL_360 => [
			"TYPE_INVALID" => 0,
			"TYPE_RESOURCE" => 1,
			"TYPE_BEHAVIOR" => 2,
			"TYPE_WORLD_TEMPLATE" => 3,
			"TYPE_ADDON" => 4,
			"TYPE_SKINS" => 5,
			"TYPE_CACHED" => 6,
			"TYPE_COPY_PROTECTED" => 7,
			"TYPE_COUNT" => 8
		]
	];
}
