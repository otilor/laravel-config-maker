<?php

namespace Gabrielfemi\LaravelConfigMaker;

class LaravelConfigMaker
{
    public static function create($fileName) : bool
    {
        $configDir =  'config/';
        file_put_contents($configDir . $fileName, '');

        return true;
    }
}
