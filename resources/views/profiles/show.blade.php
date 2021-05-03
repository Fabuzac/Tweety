@extends('layouts.app')

@section('content')
    <div class="mb-6 header relative">
        <img 
            src="/images/default-profile-banner.jpg" 
            alt="Default profile banner rounded-full"
            class="mb-2"
        >

        <div class="is-flex is-justify-content-space-between items-center">
            <div>
                <h2 class="font-bold text2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="#" class="button rounded-full shadow py-2 px-4 text-xs">Edit Profile</a>
                <a href="#" class="button bg-blue-500 rounded-full shadow py-2 px-4 text-xs">Follow Me</a>
            </div>
        </div>

        <img 
            src="{{ $user->avatar }}" 
            alt=""
            class="rounded-full p-1 image-profile-banner"
        >
    </div>

    <p class="text-sm pb-4">
        Mobile Suit Gundam was developed by animator Yoshiyuki Tomino and a 
        changing group of Sunrise creators with the collective pseudonym of 
        Hajime Yatate. The series was originally entitled Freedom Fighter Gunboy (or Gunboy) 
        for the robot's gun, with teen boys the primary target demographic. 
        Early production had a number of references to freedom: the White Base was originally "Freedom's Fortress"
    </p>

    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endsection