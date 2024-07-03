<?php

namespace CryptoWeb\Infoflot\Facades;

use Illuminate\Support\Facades\Facade;

class InfoflotFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'infoflot';
    }
}
