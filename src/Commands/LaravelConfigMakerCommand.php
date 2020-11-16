<?php

namespace Gabrielfemi\LaravelConfigMaker\Commands;

use Gabrielfemi\LaravelConfigMaker\LaravelConfigMaker;
use Illuminate\Console\Command;

class LaravelConfigMakerCommand extends Command
{
    public $signature = 'config:make {file}';

    public $description = 'Creates a config file.';

    public function handle()
    {
        $file = $this->argument('file');
        LaravelConfigMaker::create($file);

        $this->comment("Config file 'config/$file' created");
    }
}
