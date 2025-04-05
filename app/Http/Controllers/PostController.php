<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller //StudlyCase
{
    public function index() //camelCase
    {
        //query to retrieve posts from database
        //select * from posts;
        $posts = Post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show($id)
    {
        //select * from posts where id = 1 limit 1;
        $post = Post::find($id);
        // dd($post->user, $post->testingRelation);
        //select * from posts where id = 1 limit 1;
        // $post = Post::where('id', $id)->first();

        //select * from posts where title = 'laravel' limit 1;
        // $postWithTitle = Post::where('title', 'laravel')->first();

         //select * from posts where title = 'laravel';
        //  $postsWithTitle = Post::where('title', 'laravel')->get();

        return view('posts.show',[
            'post' => $post,
        ]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create', [
            'users' => $users,
        ]);
    }

    public function store(Request $request)
    {
        //1-get the data
        //2- store the data in database
        //3- redirect to posts index page

        // $data = $_POST;
        // dd($data);
        // //print and stop execution (die dump)
        // dd('hello world stop execution here');

        // //$data = request()->all();
        // $requestObject = request();
        // $data = $requestObject->all();

        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;
        // dd($title, $description, $postCreator);

        // dd($request->all());

        //First Syntax to store post
        // $post = new Post;
 
        // $post->title = $title;
        // $post->description = $description;
 
        // $post->save();

        Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $postCreator
        ]);

        //query to return the data from database
        return to_route('posts.index');
    }
}
