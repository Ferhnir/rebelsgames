<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'posts' => 'API\PostsController'
]);

Route::apiResources([
    'faqs' => 'API\FaqsController'
]);

Route::apiResources([
    'ores' => 'API\OreOccurrController'
]);

Route::apiResources([
    'celestials' => 'API\CelestialObjectController'
]);

Route::apiResources([
    'faq/commands' => 'API\FaqsCommandController'
]);