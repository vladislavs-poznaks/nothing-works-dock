<?php

namespace NothingWorks\Dock\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NothingWorks\Dock\Dock
 */
class Dock extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'nothing-works-dock';
    }
}
