<?php

declare(strict_types=1);

namespace JRF\Time;

use JRF\Util\Dir;

class Time
{
	public static function parse(): void
	{
		$rootPath = Dir::systemRoot('time');
		$files = Dir::parse($rootPath);
		var_dump($files);
	}
}
