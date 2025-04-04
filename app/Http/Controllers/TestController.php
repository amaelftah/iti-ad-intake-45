<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller //StudlyCase
{
    public function testAction() //camelCase
    {
        return view('test');
    }

}
