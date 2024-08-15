<?php

namespace Murrant\LibrenmsExamplePlugin;

use App\Facades\PluginManager;
use Illuminate\Foundation\Console\AboutCommand;

class ExamplePluginProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $pluginName = 'example-plugin';

        // register hooks with LibreNMS (if any are desired)
        // if no hooks are defined, LibreNMS may delete the plugin, if you don't want any specific hooks, you can
        // just register a settings hookK
        PluginManager::publishHook($pluginName, \App\Plugins\Hooks\MenuEntryHook::class, MenuEntryHook::class);

        if (! PluginManager::pluginEnabled($pluginName)) {
            return; // if plugin is disabled, don't boot
        }

        AboutCommand::add('Example Plugin', fn (): array => ['Version' => '1.0.0']);

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $pluginName);

        $this->publishes([
            // __DIR__.'/../public' => public_path('vendor/example-plugin'), // files that can be published publicly
            __DIR__.'/../config/config.php' => config_path('example-plugin.php'),
        ]);
    }
}
