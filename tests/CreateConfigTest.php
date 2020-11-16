<?php


namespace Gabrielfemi\LaravelConfigMaker\Tests;

use Faker\Factory;
use Gabrielfemi\LaravelConfigMaker\LaravelConfigMaker;

class CreateConfigTest extends TestCase
{
    /** @test */
    public function it_can_create_config_file()
    {
        $fileName = Factory::create()->slug(3) . '.php';
        LaravelConfigMaker::create($fileName);

        return $this->assertFileExists('config/' . $fileName);
    }
}
