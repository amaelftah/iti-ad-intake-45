<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

//1- Route & Controller & view ----- (DONE)
//2- css framework (tailwindcss) && installation && import ------ (DONE)
//3- write the html with static data to show posts ------ (DONE
