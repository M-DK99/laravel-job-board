<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Models\Tag;

// Route::get('/', function () {
//     return view('welcome'); 
// });

Route::get('/new', function () {
    return "Hello World New";
});
Route::get('/job', [JobController::class,'index']);



// Route::get('/',[IndexController::class,'index']);
// Route::get('/contact',[IndexController::class,'contact']);
// Route::get('/about',[IndexController::class,'about']);

Route::get('/',IndexController::class);
Route::get('/contact',ContactController::class);
Route::get('/about',AboutController::class);

Route::resource('blog', PostController::class);
// Route::get('/blog', [PostController::class, 'index']);
// Route::post('/blog', [PostController::class, 'create']);
// Route::delete('/blog/{id}', [PostController::class, 'delete']);
// Route::get('blog/{id}', [PostController::class, 'show']);

Route::resource('comment', CommentController::class);
// Route::get('/comment', [CommentController::class, 'index']);
// Route::post('/comment', [CommentController::class, 'create']);

Route::resource('tags', TagController::class);
// Route::get('/tags', [TagController::class, 'index']);
// Route::post('/tags', [TagController::class, 'create']);
// Route::get('/tags/test-many',[TagController::class, 'testManyToMany']);