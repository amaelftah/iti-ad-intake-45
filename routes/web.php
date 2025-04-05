<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{post}/', [PostController::class, 'show'])->name('posts.show');

//1- Route & Controller & view ----- (DONE)
//2- css framework (tailwindcss) && installation && import ------ (DONE)
//3- write the html with static data to show posts ------ (DONE


//1- schema change
//2- CRUD operations


//Table
//users, posts
//posts (id, title varchar, description text, created_at)

//1- one user has many posts ------ OR ----- one post belongs to one user
//2- add column user_id to posts table
//3- store user_id logic inside PostController@store
