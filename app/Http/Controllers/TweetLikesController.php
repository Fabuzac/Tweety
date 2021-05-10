<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
// use App\Models\Like;
// use App\Models\User;

class TweetLikesController extends Controller {

    public function store(Tweet $tweet) {

        $tweet->like(auth()->user());

        return back();
    }

    public function destroy(Tweet $tweet) {

        $tweet->dislike(auth()->user());

        return back();
    }
}
