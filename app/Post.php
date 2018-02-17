<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $with = ['user'];

    protected $fillable = ['user_id', 'content'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
