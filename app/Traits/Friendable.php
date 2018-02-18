<?php
namespace App\Traits;

use App\Friendship;
use App\User;
use Illuminate\Support\Facades\Auth;

trait Friendable{
    public function add_friend($userId){
        if($this->has_pending_friend_request_sent_to($userId) == 1){
            return response()->json('have sent requests and wait for acceptance from the opponent');
        }else if($this->has_pending_friend_request_sent_from($userId) == 1){
            return $this->accept_friend($userId);
        }else{
            $friendship = Friendship::create([
                'requester' => Auth::user()->id,
                'user_requested' => $userId,
            ]);
            if($friendship){
                $status = Friendship::where('requester', Auth::user()->id)
                    ->where('user_requested', $userId)->pluck('status');
                $alertSuccess = 'Send a friend request successfully';
                return response()->json([$status, $alertSuccess]);
            }
        }
    }
    public function accept_friend($userId){

        $friendship = Friendship::where('requester',$userId)
            ->where('user_requested', Auth::user()->id)->first();

        if($friendship){
            $friendship->update([
                'status' => 'Friend'
            ]);
            return response()->json('Add Friend Success');
        }
    }

    public function friends()
    {
        $friends = array();

        $f1 = Friendship::where('status', 'Friend')
            ->where('requester', Auth::user()->id)
            ->get();
        foreach($f1 as $friendship):
            array_push($friends, User::find($friendship->user_requested));
        endforeach;
        $friends2 = array();

        $f2 = Friendship::where('status', 'Friend')
            ->where('user_requested', Auth::user()->id)
            ->get();
        foreach($f2 as $friendship):
            array_push($friends2, User::find($friendship->requester));
        endforeach;
        return array_merge($friends, $friends2);

    }

    //Pending request to
    public function check_friend($user_id)
    {
        $friendsto = Friendship::where(['requester' => $user_id, 'user_requested' => Auth::user()->id ,'status' => 'Friend'])
            ->pluck('status');
        $friendsfrom = Friendship::where(['requester' => Auth::user()->id, 'user_requested' => $user_id ,'status' => 'Friend'])
            ->pluck('status');


        return response()->json([$friendsto,$friendsfrom]);
    }


    //Pending request to
    public function pending_friend_requests_sent()
    {
        $friends = Friendship::where(['requester' => Auth::user()->id, 'status' => 'Pending'])
            ->with('user')->paginate(4);

        return response()->json($friends);
    }

    public function pending_friend_requests_sent_ids()
    {
        $data = $this->pending_friend_requests_sent();

        $original = $data->getOriginalContent()->pluck('user.id')->toArray();

        return $original;

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

    //Pending request from
    public function pending_friend_sent_requests_to(){

        $friends = Friendship::where(['user_requested' => Auth::user()->id, 'status' => 'Pending'])
            ->get();

        return response()->json($friends);
    }

    public function pending_sent_requests_to_ids(){
        $data = $this->pending_friend_sent_requests_to();

        $original = $data->getOriginalContent()->pluck('requester')->toArray();

            return $original;
        }

    public function has_pending_friend_request_sent_from($user_id)
    {
        if(in_array($user_id, $this->pending_sent_requests_to_ids()))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }

    //cancel request
    public function cancel_request_add_friend($user_requested){

        Friendship::where('requester', Auth::user()->id)->where('user_requested', $user_requested)->delete();

        return response()->json('Cancel Request Success');

    }
    public function cancel_request_bar($user_id){

        Friendship::where('requester', $user_id)->where('user_requested', Auth::user()->id)->delete();

        return response()->json('Cancel Request Success');

    }

    public function pendingToList(){

        $friends = array();

        $data = Friendship::where(['user_requested' => Auth::user()->id, 'status' => 'Pending'])
            ->get();

        foreach($data as $friendship):
            array_push($friends, User::find($friendship->requester));
        endforeach;

        return response()->json($friends);
    }

}