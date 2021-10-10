<?php

namespace TheUsual\Greet;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__.'/../config/greet.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('greet.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'greet'
        );

        $this->app->bind('greet', function () {
            return new Greet();
        });
    }
}
