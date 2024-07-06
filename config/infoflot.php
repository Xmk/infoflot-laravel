<?php

return [

	/**
	 * Your personal partner api token for api access
	 */
	'api_key' => env('INFOFLOT_API_KEY', ''),

	/**
	 * Base domain uri
	 * Recommended use by default
	 */
	'base_uri' => env('INFOFLOT_BASE_URI', 'https://restapi.infoflot.com'),

	/**
	 * UserAgent of your client app
	 * Recommended use by default
	 */
	'useragent' => env('INFOFLOT_USERAGENT', 'laravel-infoflot-client/php-' . PHP_VERSION),

];
