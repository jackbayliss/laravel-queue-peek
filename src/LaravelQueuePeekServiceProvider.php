<?php

namespace JackBayliss\LaravelQueuePeek;

use Illuminate\Support\ServiceProvider;
use JackBayliss\LaravelQueuePeek\Commands\LaravelQueuePeekCommand;

class LaravelQueuePeekServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                LaravelQueuePeekCommand::class,
            ]);
        }
    }
}
