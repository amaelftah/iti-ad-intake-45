<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller //StudlyCase
{
    public function index() //camelCase
    {
        return view('posts.index');
    }

    public function show()
    {
        $post = [
            'title' => 'Hello Post',
            'description' => 'this is some post',
            'user' => [
                'name' => 'Ahmed',
                'email' => 'ahmed@gmail.com',
                'created_at' => '2024-10-01 10:00:00'
            ]
        ];

        return view('posts.show',[
            'post' => $post,
        ]);
    }

}
