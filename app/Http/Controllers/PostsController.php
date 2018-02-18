<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function posts(){
        $friends = Auth::user()->friends();

        $feed = array();
        foreach($friends as $friend):

            foreach($friend->posts as $post):
                array_push($feed, $post);
            endforeach;
        endforeach;
        foreach(Auth::user()->posts as $post):
            array_push($feed, $post);
        endforeach;
        usort($feed, function($p1, $p2){
            return $p1->id < $p2->id;
        });
        return $feed;
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
