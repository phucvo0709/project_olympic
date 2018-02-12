<?php
namespace App\Traits;

use App\Friendship;
use App\User;
use Illuminate\Support\Facades\Auth;

trait Friendable{
    public function add_friend($user_requested_id){

        if($this->has_pending_friend_request_sent_to($user_requested_id) == 1){
            return response()->json('have sent requests and wait for acceptance from the opponent');
        }else{
            $friendship = Friendship::create([
                'requester' => Auth::user()->id,
                'user_requested' => $user_requested_id,
            ]);
            if($friendship){
                $status = Friendship::where('requester', Auth::user()->id)
                    ->where('user_requested', $user_requested_id)->pluck('status');
                $alertSuccess = 'Send a friend request successfully';
                return response()->json([$status, $alertSuccess]);
            }
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
        }
    }

    public function friends(){

        $friends = Friendship::where('status', 1)->where('user_requested', $this->id)->get();

        return response()->json($friends);
    }

    public function friends_ids(){
        return collect($this->friends())->pluck('id');
    }

    //Check pending request

    public function pending_friend_requests_sent()
    {
        $friends = Friendship::where(['requester' => Auth::user()->id, 'status' => 'Pending'])
            ->with('user')->paginate(4);

        return response()->json($friends);
    }

    public function pending_friend_requests_sent_ids()
    {
        return collect($this->pending_friend_requests_sent())->pluck('id')->toArray();
    }

    public function has_pending_friend_request_sent_to($user_id)
    {
        if(in_array($user_id, $this->pending_friend_requests_sent_ids()))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    public function cancel_request_add_friend($user_requested){

        Friendship::where('requester', Auth::user()->id)->where('user_requested', $user_requested)->delete();

        return response()->json('Cancel Request Success');

    }

}