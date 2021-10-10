<?php

namespace TheUsual\Greet\Tests;

use TheUsual\Greet\Facades\Greet;
use TheUsual\Greet\ServiceProvider;
use Orchestra\Testbench\TestCase;

class GreetTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'greet' => Greet::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
