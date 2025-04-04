<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller //StudlyCase
{
    public function index() //camelCase
    {
        return view('posts.index');
    }

}
