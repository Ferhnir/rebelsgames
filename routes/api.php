<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'posts' => 'API\PostsController'
]);

Route::apiResources([
    'faqs/tabs' => 'API\FaqsTabsController'
]);

Route::apiResources([
    'faq/commands' => 'API\FaqsCommandController'
]);

Route::apiResources([
    'ores' => 'API\OreController'
]);

Route::apiResources([
    'celestials' => 'API\CelestialObjectController'
]);
