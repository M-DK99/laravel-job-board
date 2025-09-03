<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;

// Route::get('/', function () {
//     return view('welcome'); 
// });

Route::get('/',[indexController::class,'index']);
Route::get('/about',[indexController::class,'about']);
Route::get('/contact',[indexController::class,'contact']);

Route::get('/new', function () {
    return "Hello World New";
});

Route::get('/job', [JobController::class,'index']);
