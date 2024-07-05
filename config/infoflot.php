<?php

return [

	'base_uri' => env('INFOFLOT_BASE_URI', 'https://restapi.infoflot.com'),

	'api_key' => env('INFOFLOT_API_KEY', ''),

	'useragent' => env('INFOFLOT_USERAGENT', 'laravel-infoflot-client/php-' . PHP_VERSION),

];
