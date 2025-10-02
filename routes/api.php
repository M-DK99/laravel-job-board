<?php

use App\Http\Controllers\api\v1\AuthController;
use App\Http\Controllers\api\v1\PostApiController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function(){
    Route::apiResource('post', PostApiController::class)->middleware('auth:api');

    Route::prefix('auth')->group(function(){
        Route::post('login',[AuthController::class, 'login']);


        Route::middleware('auth:api')->group(function(){
            Route::post('refresh',[AuthController::class, 'refresh']);
            Route::get('me',[AuthController::class, 'me']);
            Route::post('logout',[AuthController::class, 'logout']);
        });
    });
});


// Route::prefix('v2')->group(function(){
//     Route::apiResource('post', PostApiController::class);
// });

// Route::apiResource('post', PostApiController::class);
// Route::post('/blog', [PostController::class, 'create']);
// Route::delete('/blog/{id}', [PostController::class, 'delete']);

// Route::post('/comment', [CommentController::class, 'create']);
// Route::post('/tags', [TagController::class, 'create']);