<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Models\Tag;

class TweetsController extends Controller {

    public function index() {

        if (request('tag')) {
            $tweets = Tag::where('name', request('tag'))->firstOrFail()->tweets;
            
        } else {
            $tweets = Tweet::latest()->get();
        }

        $tags = Tag::all();

        return view('tweets.index', [
            'tweets' => auth()->user()->timeline(),
            'tags' => $tags,
            [ 'tags' => Tag::all() ],
            
        ]);
    }

    public function store() {

        $attributes = request()->validate([
            'body' => 'required|max:255',
            'tags' => 'exists:tags,id'
            ]);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
        ]);

        return redirect('/tweets' );

        // $tweet = new Tweet(request(['body', 'tags]));
        // $tweet->user_id = 1; // auth()->id()
        // $tweet->save();

        // $tweet->tags()->attach(request('tags'));

    }
}
