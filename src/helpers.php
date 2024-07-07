<?php

use CryptoWeb\Infoflot\Facades\Infoflot;

if (! function_exists('infoflot')) {
	/**
	 * Get Infoflot service.
	 *
	 * @return \CryptoWeb\Infoflot\Facades\Infoflot
	 */
	function infoflot()
	{
		return new class
		{
			public function __call($method, $parameters)
			{
				return Infoflot::$method(...$parameters);
			}
		};
	}
}
