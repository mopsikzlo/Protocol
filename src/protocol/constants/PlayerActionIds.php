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

final class PlayerActionIds{
	private function __construct(){
		//NOOP
	}

	public const PLAYER_ACTION_IDS = [
		ProtocolInfo::PROTOCOL_134 => [
			"ACTION_START_BREAK" => 0,
			"ACTION_ABORT_BREAK" => 1,
			"ACTION_STOP_BREAK" => 2,
			"ACTION_GET_UPDATED_BLOCK" => 3,
			"ACTION_DROP_ITEM" => 4,
			"ACTION_START_SLEEPING" => 5,
			"ACTION_STOP_SLEEPING" => 6,
			"ACTION_RESPAWN" => 7,
			"ACTION_JUMP" => 8,
			"ACTION_START_SPRINT" => 9,
			"ACTION_STOP_SPRINT" => 10,
			"ACTION_START_SNEAK" => 11,
			"ACTION_STOP_SNEAK" => 12,
			"ACTION_DIMENSION_CHANGE_REQUEST" => 13,
			"ACTION_DIMENSION_CHANGE_ACK" => 14,
			"ACTION_START_GLIDE" => 15,
			"ACTION_STOP_GLIDE" => 16,
			"ACTION_BUILD_DENIED" => 17,
			"ACTION_CONTINUE_BREAK" => 18,
			"ACTION_CHANGE_SKIN" => 19,
			"ACTION_SET_ENCHANTMENT_SEED" => 20,
			"ACTION_START_SWIMMING" => 21,
			"ACTION_STOP_SWIMMING" => 22,
			"ACTION_START_SPIN_ATTACK" => 23,
			"ACTION_STOP_SPIN_ATTACK" => 24,
			"ACTION_INTERACT_BLOCK" => 25
		],
		ProtocolInfo::PROTOCOL_130 => [
			"ACTION_START_BREAK" => 0,
			"ACTION_ABORT_BREAK" => 1,
			"ACTION_STOP_BREAK" => 2,
			"ACTION_GET_UPDATED_BLOCK" => 3,
			"ACTION_DROP_ITEM" => 4,
			"ACTION_STOP_SLEEPING" => 5,

			"ACTION_RESPAWN" => 6,
			"ACTION_JUMP" => 7,
			"ACTION_START_SPRINT" => 8,
			"ACTION_STOP_SPRINT" => 9,
			"ACTION_START_SNEAK" => 10,
			"ACTION_STOP_SNEAK" => 11,
			"ACTION_DIMENSION_CHANGE_REQUEST" => 12,
			"ACTION_DIMENSION_CHANGE_ACK" => 13,
			"ACTION_START_GLIDE" => 14,
			"ACTION_STOP_GLIDE" => 15,
			"ACTION_BUILD_DENIED" => 16,
			"ACTION_CONTINUE_BREAK" => 17
		],
		ProtocolInfo::PROTOCOL_90 => [
			"ACTION_START_BREAK" => 0,
			"ACTION_ABORT_BREAK" => 1,
			"ACTION_STOP_BREAK" => 2,
			"ACTION_GET_UPDATED_BLOCK" => 3,
			"ACTION_DROP_ITEM" => 4,
			"ACTION_RELEASE_ITEM" => 5,
			"ACTION_STOP_SLEEPING" => 6,
			"ACTION_RESPAWN" => 7,
			"ACTION_JUMP" => 8,
			"ACTION_START_SPRINT" => 9,
			"ACTION_STOP_SPRINT" => 10,
			"ACTION_START_SNEAK" => 11,
			"ACTION_STOP_SNEAK" => 12,
			"ACTION_DIMENSION_CHANGE_REQUEST" => 13,
			"ACTION_DIMENSION_CHANGE_ACK" => 14,
			"ACTION_START_GLIDE" => 15,
			"ACTION_STOP_GLIDE" => 16,
			"ACTION_BUILD_DENIED" => 17,
			"ACTION_CONTINUE_BREAK" => 18
		]
	];
}
