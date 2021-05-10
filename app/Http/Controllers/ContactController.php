<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Mail\ContactMe;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {
    
    public function show() {
    
        return view('contact');
    }



    public function store() {
        // send the email
        // $email = request('email');

        // Mail::raw('It works!', function ($message) {

        //     $message->to(request('email'))
        //         ->subject('Hello There')
        //         ->from('test@test.com');
                
        // });
        $title = request()->input('title');
        $email = request()->input('email');
        $body = request()->input('body');
        
        request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))
            ->send(new ContactMe(request()->input('subject')));
            // ->subject('Hello There')
            // ->from('test@test.com');
            

        return redirect('contact')
            ->with('message', 'Email sent!');
    }
}
