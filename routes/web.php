<?php

use Illuminate\Support\Facades\Route;
use Murrant\LibrenmsExamplePlugin\Controllers\ExamplePageController;
use Murrant\LibrenmsExamplePlugin\Controllers\ImageController;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('plugin/example-page', [ExamplePageController::class, 'index']);
    Route::get('plugin/example-page/images/{image}', ImageController::class);
});
