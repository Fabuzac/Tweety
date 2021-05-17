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
                
        ]);
    }

    public function store() {

        $this->validateArticle();
        
        $tweet = new tweet(request(['body']));
        $tweet->user_id = auth()->id(); // auth()->id()
        $tweet->save();

        $tweet->tags()->attach(request('tags'));

        return redirect('/tweets' );
    }

    public function validateArticle() {

        return request()->validate([
            'body' => 'required|max:255',            
            'tags' => 'exists:tags,id'
        ]);

    }    
}
