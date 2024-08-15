<?php

namespace Murrant\LibrenmsExamplePlugin;

use Illuminate\Foundation\Console\AboutCommand;

class ExamplePluginProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        AboutCommand::add('Example Plugin', fn (): array => ['Version' => '1.0.0']);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'example-plugin');

        $this->publishes([
            // __DIR__.'/../public' => public_path('vendor/example-plugin'), // files that can be published publicly
            __DIR__.'/../config/config.php' => config_path('example-plugin.php'),
        ]);
    }
}
