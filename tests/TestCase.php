<?php

namespace JackBayliss\LaravelQueuePeek\Tests;

use JackBayliss\LaravelQueuePeek\LaravelQueuePeekServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelQueuePeekServiceProvider::class,
        ];
    }
}
