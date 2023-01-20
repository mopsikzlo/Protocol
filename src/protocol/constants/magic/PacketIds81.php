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

namespace pocketmine\network\mcpe\protocol\constants\magic;

final class PacketIds81{
	private function __construct(){
		//NOOP
	}

	public const LOGIN_PACKET = 0x01;
	public const PLAY_STATUS_PACKET = 0x02;
	public const SERVER_TO_CLIENT_HANDSHAKE_PACKET = 0x03;
	public const CLIENT_TO_SERVER_HANDSHAKE_PACKET = 0x04;
	public const DISCONNECT_PACKET = 0x05;
	public const BATCH_PACKET = 0x06;
	public const TEXT_PACKET = 0x07;
	public const SET_TIME_PACKET = 0x08;
	public const START_GAME_PACKET = 0x09;
	public const ADD_PLAYER_PACKET = 0x0a;
	public const ADD_ACTOR_PACKET = 0x0b;
	public const REMOVE_ACTOR_PACKET = 0x0c;
	public const ADD_ITEM_ACTOR_PACKET = 0x0d;
	public const ADD_HANGING_ACTOR_PACKET = 0x0e;
	public const TAKE_ITEM_ACTOR_PACKET = 0x0f;
	public const MOVE_ACTOR_ABSOLUTE_PACKET = 0x10;
	public const MOVE_PLAYER_PACKET = 0x11;
	public const RIDER_JUMP_PACKET = 0x12;
	public const REMOVE_BLOCK_PACKET = 0x13;
	public const UPDATE_BLOCK_PACKET = 0x14;
	public const ADD_PAINTING_PACKET = 0x15;
	public const EXPLODE_PACKET = 0x16;
	public const LEVEL_SOUND_EVENT_PACKET = 0x17;
	public const LEVEL_EVENT_PACKET = 0x18;
	public const BLOCK_EVENT_PACKET = 0x19;
	public const ACTOR_EVENT_PACKET = 0x1a;
	public const MOB_EFFECT_PACKET = 0x1b;
	public const UPDATE_ATTRIBUTES_PACKET = 0x1c;
	public const MOB_EQUIPMENT_PACKET = 0x1d;
	public const MOB_ARMOR_EQUIPMENT_PACKET = 0x1e;
	public const INTERACT_PACKET = 0x1f;
	public const USE_ITEM_PACKET = 0x20;
	public const PLAYER_ACTION_PACKET = 0x21;
	public const HURT_ARMOR_PACKET = 0x22;
	public const SET_ACTOR_DATA_PACKET = 0x23;
	public const SET_ACTOR_MOTION_PACKET = 0x24;
	public const SET_ACTOR_LINK_PACKET = 0x25;
	public const SET_HEALTH_PACKET = 0x26;
	public const SET_SPAWN_POSITION_PACKET = 0x27;
	public const ANIMATE_PACKET = 0x28;
	public const RESPAWN_PACKET = 0x29;
	public const DROP_ITEM_PACKET = 0x2a;
	public const INVENTORY_ACTION_PACKET = 0x2b;
	public const CONTAINER_OPEN_PACKET = 0x2c;
	public const CONTAINER_CLOSE_PACKET = 0x2d;
	public const CONTAINER_SET_SLOT_PACKET = 0x2e;
	public const CONTAINER_SET_DATA_PACKET = 0x2f;
	public const CONTAINER_SET_CONTENT_PACKET = 0x30;
	public const CRAFTING_DATA_PACKET = 0x31;
	public const CRAFTING_EVENT_PACKET = 0x32;
	public const ADVENTURE_SETTINGS_PACKET = 0x33;
	public const BLOCK_ACTOR_DATA_PACKET = 0x34;
	public const PLAYER_INPUT_PACKET = 0x35;
	public const LEVEL_CHUNK_PACKET = 0x36;
	public const SET_COMMANDS_ENABLED_PACKET = 0x37;
	public const SET_DIFFICULTY_PACKET = 0x38;
	public const CHANGE_DIMENSION_PACKET = 0x39;
	public const SET_PLAYER_GAME_TYPE_PACKET = 0x3a;
	public const PLAYER_LIST_PACKET = 0x3b;
	public const EVENT_PACKET = 0x3c;
	public const SPAWN_EXPERIENCE_ORB_PACKET = 0x3d;
	public const CLIENTBOUND_MAP_ITEM_DATA_PACKET = 0x3e;
	public const MAP_INFO_REQUEST_PACKET = 0x3f;
	public const REQUEST_CHUNK_RADIUS_PACKET = 0x40;
	public const CHUNK_RADIUS_UPDATED_PACKET = 0x41;
	public const ITEM_FRAME_DROP_ITEM_PACKET = 0x42;
	public const REPLACE_ITEM_IN_SLOT_PACKET = 0x43;
	public const GAME_RULES_CHANGED_PACKET = 0x44;
	public const CAMERA_PACKET = 0x45;
	public const ADD_ITEM_PACKET = 0x46;
	public const BOSS_EVENT_PACKET = 0x47;
	public const AVAILABLE_COMMANDS_PACKET = 0x48;
	public const COMMAND_STEP_PACKET = 0x49;

}