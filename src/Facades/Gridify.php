<?php

namespace Duobix\Gridify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Duobix\Gridify\Gridify
 */
class Gridify extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Duobix\Gridify\Gridify::class;
    }
}
