<?php


namespace Gabrielfemi\LaravelConfigMaker\Tests\Commands;

use Faker\Factory;
use Gabrielfemi\LaravelConfigMaker\Tests\TestCase;

class ConfigMakeTest extends TestCase
{
    /** @test */
    public function it_can_run_the_config_make_command()
    {
        $this->artisan('config:make', ['file' => Factory::create()->slug(2)])->assertExitCode(0);
    }
}
