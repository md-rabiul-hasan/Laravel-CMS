<?php

namespace App;

use App\Friend;
use App\Status;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function friend() {
        return $this->hasMany(Friend::class);
    }

    public function status() {
        return $this->hasMany(Status::class);
    }

    public function friendshipStatus() {
        return $this->hasManyThrough(Status::class, Friend::class, 'friend_id', 'user_id', 'id', 'user_id');
    }

    // has many throug work process
    /*
    SELECT status.* FROM statuses 
    INNER JOIN friends on status.user_id=frieds.friend_id
    where friends.user_id=1

    return $this->hasManyThrough(
        Status::class,  // First Table
        Friend::class,  // Second Table
        'friend_id',  // second table join key
        'user_id',  // frist table join key
        'id', // first table primary key
         'user_id'); // lockup column

    */
}