<?php
namespace App\Traits;

use App\Friendship;

trait Friendable{
    public function add_friend($user_requested_id){
        $friendship = Friendship::create([
            'requester' => $this->id,
            'user_requested' => $user_requested_id,
        ]);

        if($friendship){
            return response()->json($friendship, 200);
        }else{
            return response()->json('fail', 501);
        }
    }

    public function accept_friend($requester){

        $friendship = Friendship::where('requester',$requester)
            ->where('user_requested', $this->id)->first();

        if($friendship){
            $friendship->update([
                'status' => 1
            ]);
            return response()->json('ok', 200);
        }else{
            return response()->json($friendship, 501);
        }
    }

    public function friends(){

        $friends = Friendship::where('status', 1)->where('user_requested', $this->id)->get();

        return response()->json($friends);
    }
}