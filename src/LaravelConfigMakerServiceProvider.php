<?php

namespace Gabrielfemi\LaravelConfigMaker;

use Illuminate\Support\ServiceProvider;
use Gabrielfemi\LaravelConfigMaker\Commands\LaravelConfigMakerCommand;

class LaravelConfigMakerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-config-maker.php' => config_path('laravel-config-maker.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/laravel-config-maker'),
            ], 'views');

            $migrationFileName = 'create_laravel_config_maker_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }

            $this->commands([
                LaravelConfigMakerCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-config-maker');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-config-maker.php', 'laravel-config-maker');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
