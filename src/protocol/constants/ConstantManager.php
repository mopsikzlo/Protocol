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

final class ConstantManager{
	private function __construct(){
		//NOOP
	}

	public const COMMAND_ARGUMENT_TYPE = CommandArgumentTypeIds::class;
	public const LEVEL_SOUND = LevelSoundIds::class;
	public const METADATA = ActorMetadataList::class;
	public const PARTICLE = ParticleIds::class;
	public const PLAYER_ACTION = PlayerActionIds::class;
	public const RESOURCE_PACK_TYPE = ResourcePackTypeIds::class;
	public const TEXT_PACKET_TYPE = TextPacketTypeIds::class;
}
