<?php

namespace JackBayliss\LaravelQueuePeek\Commands;

use Illuminate\Console\Command;

class LaravelQueuePeekCommand extends Command
{
    public $signature = 'laravel-queue-peek';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
