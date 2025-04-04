<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller //StudlyCase
{
    public function index() //camelCase
    {
        $posts = [
            ['id' => 1 , 'title' => 'First Post', 'posted_by' => 'Ahmed', 'created_at' => '2025-11-10 10:00:00'],
            ['id' => 2 , 'title' => 'Second Post','posted_by' => 'Mohamed', 'created_at' => '2025-11-10 10:00:00'],
            ['id' =>3 , 'title' => 'Third Post','posted_by' => 'Mohamed', 'created_at' => '2025-11-10 10:00:00'],
        ];

        return view('posts.index', ['posts' => $posts]);
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
