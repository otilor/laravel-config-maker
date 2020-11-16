<?php

namespace Gabrielfemi\LaravelConfigMaker;

use Illuminate\Filesystem\Filesystem;

class LaravelConfigMaker
{
    public static function create($fileName) : bool
    {
        $configDir = 'config/';
        (new Filesystem())->ensureDirectoryExists(app_path($configDir));
        file_put_contents('config/' . $fileName, "");
        copy(__DIR__ . '/Slugs/config.php',  __DIR__ . '/../config/' . $fileName);

        return true;
    }
}
