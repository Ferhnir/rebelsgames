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