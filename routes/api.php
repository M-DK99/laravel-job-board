<?php

use App\Http\Controllers\api\v1\PostApiController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function(){
    Route::apiResource('post', PostApiController::class);
});

Route::prefix('v2')->group(function(){
    Route::apiResource('post', PostApiController::class);
});

Route::apiResource('post', PostApiController::class);
// Route::post('/blog', [PostController::class, 'create']);
// Route::delete('/blog/{id}', [PostController::class, 'delete']);

Route::post('/comment', [CommentController::class, 'create']);
Route::post('/tags', [TagController::class, 'create']);