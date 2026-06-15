<?php

namespace JackBayliss\LaravelQueuePeek;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use JackBayliss\LaravelQueuePeek\Commands\LaravelQueuePeekCommand;

class LaravelQueuePeekServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-queue-peek')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_queue_peek_table')
            ->hasCommand(LaravelQueuePeekCommand::class);
    }
}
