<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller //StudlyCase
{
    public function testAction() //camelCase
    {
        $courses = ['laravel', 'php'];
        $name = 'ahmed';
        $age = '30';
        $gender = 'male';
    
        return view('test',[
            'key' => $courses,
            'personName' => $name,
        ]);
    }
}
