<?php

namespace Gabrielfemi\LaravelConfigMaker;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Gabrielfemi\LaravelConfigMaker\LaravelConfigMaker
 */
class LaravelConfigMakerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-config-maker';
    }
}
