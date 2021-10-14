<?php

namespace Ajayjoshi\Fast2sms;

use Illuminate\Support\ServiceProvider;
use Ajayjoshi\Fast2sms\Fast2SmsApi;

class Fast2SmsServiceProvider extends ServiceProvider
{
    protected $defer = false;
    protected $configName = 'fast2sms-api';

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__ . '/config/' . $this->configName . '.php';
        $this->mergeConfigFrom($configPath, $this->configName);
        $this->app->bind('fast2sms', function () {
            return new Fast2SmsApi();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $configPath = __DIR__ . '/config/' . $this->configName . '.php';
        $this->publishes([
            $configPath => config_path($this->configName . '.php')
        ], 'config');

    }
}
