<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return PostResource::collection($posts);
    }

    public function show($id)
    {
        $post = Post::find($id); //object of type App\Models\Post

        //transformation
        return new PostResource($post);
    }

    public function store(StorePostRequest $request)
    {
        $title = request()->title;
        $description = request()->description;
        $postCreator = request()->post_creator;

        $post = Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $postCreator
        ]);

        return new PostResource($post);
    }
}
