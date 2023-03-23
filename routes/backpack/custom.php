<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('team', 'TeamCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('game', 'GameCrudController');
    Route::crud('color', 'ColorCrudController');
    Route::crud('comment', 'CommentCrudController');
    Route::crud('image', 'ImageCrudController');
    Route::crud('order-line', 'OrderLineCrudController');
    Route::crud('order', 'OrderCrudController');
    Route::crud('product-size-color', 'ProductSizeColorCrudController');
}); // this should be the absolute last line of this file