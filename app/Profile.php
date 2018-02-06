<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'about',
        'birthDay',
        'birthPlace',
        'liveIn',
        'occupation',
        'phoneNumber'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
