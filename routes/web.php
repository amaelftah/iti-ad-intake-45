<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'testAction']);


//1- Route & Controller & view ----- (DONE)
//2- css framework (tailwindcss) && installation && import
//3- write the html with static data to show posts
