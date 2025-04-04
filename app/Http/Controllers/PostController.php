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

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // $data = $_POST;
        // dd($data);
        // //print and stop execution (die dump)
        // dd('hello world stop execution here');

        // //$data = request()->all();
        // $requestObject = request();
        // $data = $requestObject->all();

        // $title = request()->title;
        // $description = request()->description;
        // $postCreator = request()->post_creator;
        // dd($title, $description, $postCreator);

        // dd($request->all());
        return 'we are in store action';
    }

}
