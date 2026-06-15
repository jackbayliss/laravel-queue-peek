<?php

namespace JackBayliss\LaravelQueuePeek\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JackBayliss\LaravelQueuePeek\LaravelQueuePeek
 */
class LaravelQueuePeek extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \JackBayliss\LaravelQueuePeek\LaravelQueuePeek::class;
    }
}
