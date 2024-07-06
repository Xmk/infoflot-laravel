<?php

namespace CryptoWeb\Infoflot;

use CryptoWeb\InfoflotApi\Client as InfoflotClient;
use CryptoWeb\InfoflotApi\ClientOptions as InfoflotClientOptions;
use CryptoWeb\InfoflotApi\Factory as InfoflotFactory;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client as HttpClient;

class InfoflotServiceProvider extends ServiceProvider implements DeferrableProvider
{
	/**
	 * Bootstrap services.
	 */
	public function boot(): void
	{
		$source = realpath($raw = __DIR__.'/../config/infoflot.php') ?: $raw;

		$this->mergeConfigFrom($source, 'infoflot');

		if ($this->app->runningInConsole()) {
			$this->publishes([
				$source => config_path('infoflot.php'),
			], 'infoflot-config');
		}
	}

	/**
	 * Register services.
	 */
	public function register(): void
	{
		$this->app->singleton('infoflot', function ($app) {
			return new InfoflotFactory(
				new InfoflotClient(
					new HttpClient(),
					new InfoflotClientOptions(
						apiKey: config('infoflot.api_key'),
						baseUri: config('infoflot.base_uri'),
						userAgent: config('infoflot.useragent')
					)
				)
			);
		});
	}

	/**
	 * Get the services provided by the provider.
	 */
	public function provides(): array
	{
		return ['infoflot'];
	}
}
