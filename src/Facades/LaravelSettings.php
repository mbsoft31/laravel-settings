<?php

namespace Mbsoft31\LaravelSettings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mbsoft31\LaravelSettings\LaravelSettings
 */
class LaravelSettings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-settings';
    }
}
