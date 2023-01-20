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

final class ParticleIds{
	private function __construct(){
		//NOOP
	}

	public const PARTICLE_IDS = [
		ProtocolInfo::PROTOCOL_389 => [
			"BUBBLE" => 1,
			"BUBBLE_MANUAL" => 2,
			"CRITICAL" => 3,
			"BLOCK_FORCE_FIELD" => 4,
			"SMOKE" => 5,
			"EXPLODE" => 6,
			"EVAPORATION" => 7,
			"FLAME" => 8,
			"LAVA" => 9,
			"LARGE_SMOKE" => 10,
			"REDSTONE" => 11,
			"RISING_RED_DUST" => 12,
			"ITEM_BREAK" => 13,
			"SNOWBALL_POOF" => 14,
			"HUGE_EXPLODE" => 15,
			"HUGE_EXPLODE_SEED" => 16,
			"MOB_FLAME" => 17,
			"HEART" => 18,
			"TERRAIN" => 19,
			"SUSPENDED_TOWN" => 20, "TOWN_AURA" => 20,
			"PORTAL" => 21,

			"SPLASH" => 23, "WATER_SPLASH" => 23,
			"WATER_SPLASH_MANUAL" => 24,
			"WATER_WAKE" => 25,
			"DRIP_WATER" => 26,
			"DRIP_LAVA" => 27,
			"DRIP_HONEY" => 28,
			"FALLING_DUST" => 29, "DUST" => 29,
			"MOB_SPELL" => 30,
			"MOB_SPELL_AMBIENT" => 31,
			"MOB_SPELL_INSTANTANEOUS" => 32,
			"INK" => 33,
			"SLIME" => 34,
			"RAIN_SPLASH" => 35,
			"VILLAGER_ANGRY" => 36,
			"VILLAGER_HAPPY" => 37,
			"ENCHANTMENT_TABLE" => 38,
			"TRACKING_EMITTER" => 39,
			"NOTE" => 40,
			"WITCH_SPELL" => 41,
			"CARROT" => 42,
			"MOB_APPEARANCE" => 43,
			"END_ROD" => 44,
			"DRAGONS_BREATH" => 45,
			"SPIT" => 46,
			"TOTEM" => 47,
			"FOOD" => 48,
			"FIREWORKS_STARTER" => 49,
			"FIREWORKS_SPARK" => 50,
			"FIREWORKS_OVERLAY" => 51,
			"BALLOON_GAS" => 52,
			"COLORED_FLAME" => 53,
			"SPARKLER" => 54,
			"CONDUIT" => 55,
			"BUBBLE_COLUMN_UP" => 56,
			"BUBBLE_COLUMN_DOWN" => 57,
			"SNEEZE" => 58,
			"SHULKER_BULLET" => 59,
			"BLEACH" => 60,
			"DRAGON_DESTROY_BLOCK" => 61,
			"MYCELIUM_DUST" => 62,
			"FALLING_RED_DUST" => 63,
			"CAMPFIRE_SMOKE" => 64,
			"TALL_CAMPFIRE_SMOKE" => 65,
			"DRAGON_BREATH_FIRE" => 66,
			"DRAGON_BREATH_TRAIL" => 67
		],
		ProtocolInfo::PROTOCOL_360 => [
			"BUBBLE" => 1,
			"BUBBLE_MANUAL" => 2,
			"CRITICAL" => 3,
			"BLOCK_FORCE_FIELD" => 4,
			"SMOKE" => 5,
			"EXPLODE" => 6,
			"EVAPORATION" => 7,
			"FLAME" => 8,
			"LAVA" => 9,
			"LARGE_SMOKE" => 10,
			"REDSTONE" => 11,
			"RISING_RED_DUST" => 12,
			"ITEM_BREAK" => 13,
			"SNOWBALL_POOF" => 14,
			"HUGE_EXPLODE" => 15,
			"HUGE_EXPLODE_SEED" => 16,
			"MOB_FLAME" => 17,
			"HEART" => 18,
			"TERRAIN" => 19,
			"SUSPENDED_TOWN" => 20, "TOWN_AURA" => 20,
			"PORTAL" => 21,

			"SPLASH" => 23, "WATER_SPLASH" => 23,
			"WATER_SPLASH_MANUAL" => 24,
			"WATER_WAKE" => 25,
			"DRIP_WATER" => 26,
			"DRIP_LAVA" => 27,
			"FALLING_DUST" => 28, "DUST" => 28,
			"MOB_SPELL" => 29,
			"MOB_SPELL_AMBIENT" => 30,
			"MOB_SPELL_INSTANTANEOUS" => 31,
			"INK" => 32,
			"SLIME" => 33,
			"RAIN_SPLASH" => 34,
			"VILLAGER_ANGRY" => 35,
			"VILLAGER_HAPPY" => 36,
			"ENCHANTMENT_TABLE" => 37,
			"TRACKING_EMITTER" => 38,
			"NOTE" => 39,
			"WITCH_SPELL" => 40,
			"CARROT" => 41,
			"MOB_APPEARANCE" => 42,
			"END_ROD" => 43,
			"DRAGONS_BREATH" => 44,
			"SPIT" => 45,
			"TOTEM" => 46,
			"FOOD" => 47,
			"FIREWORKS_STARTER" => 48,
			"FIREWORKS_SPARK" => 49,
			"FIREWORKS_OVERLAY" => 50,
			"BALLOON_GAS" => 51,
			"COLORED_FLAME" => 52,
			"SPARKLER" => 53,
			"CONDUIT" => 54,
			"BUBBLE_COLUMN_UP" => 55,
			"BUBBLE_COLUMN_DOWN" => 56,
			"SNEEZE" => 57,

			"SHULKER_BULLET" => 58,
			"BLEACH" => 59,
			"DRAGON_DESTROY_BLOCK" => 60,
			"MYCELIUM_DUST" => 61,
			"FALLING_RED_DUST" => 62,
			"CAMPFIRE_SMOKE" => 63,
			"TALL_CAMPFIRE_SMOKE" => 64,
			"DRAGON_BREATH_FIRE" => 65,
			"DRAGON_BREATH_TRAIL" => 66
		],
		ProtocolInfo::PROTOCOL_91 => [
			"BUBBLE" => 1,
			"CRITICAL" => 2,
			"BLOCK_FORCE_FIELD" => 3,
			"SMOKE" => 4,
			"EXPLODE" => 5,
			"EVAPORATION" => 6,
			"FLAME" => 7,
			"LAVA" => 8,
			"LARGE_SMOKE" => 9,
			"REDSTONE" => 10,
			"RISING_RED_DUST" => 11,
			"ITEM_BREAK" => 12,
			"SNOWBALL_POOF" => 13,
			"HUGE_EXPLODE" => 14,
			"HUGE_EXPLODE_SEED" => 15,
			"MOB_FLAME" => 16,
			"HEART" => 17,
			"TERRAIN" => 18,
			"SUSPENDED_TOWN" => 19, "TOWN_AURA" => 19,
			"PORTAL" => 20,
			"SPLASH" => 21, "WATER_SPLASH" => 21,
			"WATER_WAKE" => 22,
			"DRIP_WATER" => 23,
			"DRIP_LAVA" => 24,
			"FALLING_DUST" => 25, "DUST" => 25,
			"MOB_SPELL" => 26,
			"MOB_SPELL_AMBIENT" => 27,
			"MOB_SPELL_INSTANTANEOUS" => 28,
			"INK" => 29,
			"SLIME" => 30,
			"RAIN_SPLASH" => 31,
			"VILLAGER_ANGRY" => 32,
			"VILLAGER_HAPPY" => 33,
			"ENCHANTMENT_TABLE" => 34,
			"TRACKING_EMITTER" => 35,
			"NOTE" => 36,
			"WITCH_SPELL" => 37,
			"CARROT" => 38,
			"END_ROD" => 40,
			"DRAGONS_BREATH" => 41,
			"SPIT" => 42,
			"TOTEM" => 43,
			"FOOD" => 44,
			"FIREWORKS_STARTER" => 45,
			"FIREWORKS_SPARK" => 46,
			"FIREWORKS_OVERLAY" => 47,
			"BALLOON_GAS" => 48,
			"COLORED_FLAME" => 49,
			"SPARKLER" => 50,
			"CONDUIT" => 51,
			"BUBBLE_COLUMN_UP" => 52,
			"BUBBLE_COLUMN_DOWN" => 53,
			"SNEEZE" => 54
		]
	];
}
