<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function user() {

        return $this->belongsTo(User::class);
    }

    // $tweet->like(); //true 1
    // $tweet->dislike(); //false 0
    public function like($user = null, $liked = true) {

        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id(),
            ], 
            [
                'liked' => $liked,
            ]
        );
    }

    public function dislike() {

        $this->likes(false);
    }

    public function likes() {

        return $this->hasMany(Like::class);
    }
}
