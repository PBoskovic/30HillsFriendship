<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
    public $timestamps = false;
    //
    //
    protected $fillable = [
        'friendship_id', 'friend_one', 'friend_two','id'
    ];
}
