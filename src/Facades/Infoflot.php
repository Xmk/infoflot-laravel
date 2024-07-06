<?php

namespace CryptoWeb\Infoflot\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see https://restapi.infoflot.com/docs/
 * @see https://github.com/Xmk/infoflot-api/blob/main/src/Infoflot.php
 * 
 * @method static \CryptoWeb\InfoflotApi\Infoflot cities($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot citiesDepartures($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot citiesInRoutes($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot cruises($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot onboardServices($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot publicPlaces($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot rivers($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot ports($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot countries($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot citizenships($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot currencies($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot regions($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot reservation(int $cruiseId, string $startDate)
 * @method static \CryptoWeb\InfoflotApi\Infoflot news($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot ships($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot shipsActive($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot shipsMenu()
 * @method static \CryptoWeb\InfoflotApi\Infoflot popularRoutes($id = null)
 * @method static \CryptoWeb\InfoflotApi\Infoflot requests($id = null)
 *
 * @see \CryptoWeb\InfoflotApi\Infoflot
 */
class Infoflot extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor(): string
    {
        return 'infoflot';
    }
}
