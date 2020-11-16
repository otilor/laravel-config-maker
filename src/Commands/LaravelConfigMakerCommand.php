<?php

namespace Gabrielfemi\LaravelConfigMaker\Commands;

use Illuminate\Console\Command;

class LaravelConfigMakerCommand extends Command
{
    public $signature = 'laravel-config-maker';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
