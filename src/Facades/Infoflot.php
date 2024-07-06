<?php

namespace CryptoWeb\Infoflot\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see https://restapi.infoflot.com/docs/
 * @see https://github.com/Xmk/infoflot-api/blob/main/src/Factory.php
 * 
 * @method static \CryptoWeb\InfoflotApi\Factory cities($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory citiesDepartures($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory citiesInRoutes($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory cruises($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory onboardServices($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory publicPlaces($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory rivers($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory ports($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory countries($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory citizenships($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory currencies($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory regions($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory reservation(int $cruiseId, string $startDate)
 * @method static \CryptoWeb\InfoflotApi\Factory news($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory ships($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory shipsActive($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory shipsMenu()
 * @method static \CryptoWeb\InfoflotApi\Factory popularRoutes($id = null)
 * @method static \CryptoWeb\InfoflotApi\Factory requests($id = null)
 *
 * @see \CryptoWeb\InfoflotApi\Factory
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
