<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function posts(){
        $posts = Post::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

        return response()->json($posts);
    }

    public function store(CreatePostRequest $request){

        $post = Post::create([
            'user_id' => Auth::user()->id,
            'content' => $request->content
        ]);

        if($post){
            $post = Post::with('user')->first();
            return response()->json($post);
        }

    }
}
