@extends('layouts.app')

@section('content')
    <div class="is-flex">
        {{-- column left --}}
        <div class="is-offset-0-mobile is-flex-grow-1 width-20 mr-6">@include('_sidebar-links')</div>
        
        {{-- column center --}}
        <div class="is-offset-0-mobile is-full width-90">
            @include('_publish-tweet-panel')            

            <div class="border border-gray-300 rounded-lg">
                @foreach($tweets as $tweet)
                    @include('_tweet')
                @endforeach
            </div>
        </div>

        {{-- column right --}}
        <div class="aside-friends is-offset-0-mobile is-flex-grow-1 width-20 ml-6">
            @include('_friends-list')
        </div>
    </div>
@endsection
