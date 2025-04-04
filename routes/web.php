<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $courses = ['laravel', 'php'];
    $name = 'ahmed';
    $age = '30';
    $gender = 'male';

    return view('test',[
        'key' => $courses,
        'personName' => $name,
    ]);
});
