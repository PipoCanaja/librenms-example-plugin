<?php

namespace Murrant\LibrenmsExamplePlugin;

class MenuEntryHook extends \App\Plugins\Hooks\MenuEntryHook
{
    public string $view = 'menu';

    public function data(): array
    {
        $path = realpath(__DIR__.'/../assets/');
        $images = array_map('basename', glob($path.'/*.{gif,jpg,jpeg,png,svg}', GLOB_BRACE));

        return [
            'images' => $images,
        ];
    }
}
