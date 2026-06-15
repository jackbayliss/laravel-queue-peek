<?php

namespace JackBayliss\LaravelQueuePeek;

use JackBayliss\LaravelQueuePeek\Commands\LaravelQueuePeekCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelQueuePeekServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-queue-peek')
            ->hasCommand(LaravelQueuePeekCommand::class);
    }
}
