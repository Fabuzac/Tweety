@extends('layouts.app')

@section('content')
    <div class="mb-6 header relative">
        <div class="relative">
            <img 
                src="/images/default-profile-banner.jpg" 
                alt="Default profile banner rounded-full"
                class="mb-2 banner shadow"
            >

            <img 
                src="{{ $user->avatar }}" 
                alt="Profile picture"
                class="rounded-full p-1 image-profile-banner shadow"
            >
        </div>

        <div class="is-flex is-justify-content-space-between items-center">
            <div>
                <h2 class="font-bold is-size-3 mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="is-flex">
                @if (auth()->user()->is($user))
                {{-- @can ('edit', $user)@endcan --}}
                    <a href="{{ $user->path('edit') }}" class="button rounded-full shadow py-2 px-4 text-xs">Edit Profile</a>
                
                @endif

                @if (auth()->user()->isNot($user))
                    <form method="POST" action="{{ $user->path('follow') }}">
                        @csrf

                        <button type="submit" class="button is-info bg-blue-500 rounded-full shadow py-2 px-4 text-xs">
                            {{ auth()->user()->following($user) ? 'Unfollow me' : 'Follow me' }}
                        </button>
                    </form>
                @endif

            </div>
        </div>        
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