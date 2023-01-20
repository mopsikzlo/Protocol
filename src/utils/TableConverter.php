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

final class TableConverter{
	private function __construct(){
		//NOOP
	}

	/**
	 * @param int[] $from
	 * @param int[] $to
	 * @param \SplFixedArray<int|null>|null $fromTo reference parameter
	 * @param \SplFixedArray<int|null>|null $toFrom reference parameter
	 */
	public static function convert(array $from, array $to, ?\SplFixedArray &$fromTo, ?\SplFixedArray &$toFrom, int $defaultValue = -1) : void{
		$fromTo = new \SplFixedArray(max($from) + 1);
		$toFrom = new \SplFixedArray(max($to) + 1);
		foreach($from as $name => $value){
			if(isset($to[$name])){
				$fromTo[$value] = $to[$name];
			}
		}

		foreach($to as $name => $value){
			if(isset($from[$name])){
				$toFrom[$value] = $from[$name];
			}
		}

		static::fillDefaultValue($fromTo, $defaultValue);
		static::fillDefaultValue($toFrom, $defaultValue);
	}

	/**
	 * @param \SplFixedArray<int|null> $array
	 */
	private static function fillDefaultValue(\SplFixedArray $array, int $defaultValue) : void{
		for($i = 0; $i < $array->getSize(); $i++){
			if($array[$i] === null){
				$array[$i] = $defaultValue;
			}
		}
	}
}
