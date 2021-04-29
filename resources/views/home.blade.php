@extends('layouts.app')

@section('content')
    <div class="is-flex">
        {{-- column left --}}
        <div class="is-offset-0-mobile is-flex-grow-1 width-20 mr-6">@include('_sidebar-links')</div>
        
        {{-- column center --}}
        <div class="is-offset-0-mobile is-full width-100">
            @include('_publish-tweet-panel')            

            <div class="border border-gray-300 rounded-lg">
                @include('_tweet')
                @include('_tweet')
                @include('_tweet')
                @include('_tweet')
            </div>
        </div>

        {{-- column right --}}
        <div class="is-offset-0-mobile is-flex-grow-1 width-20 ml-6">
            @include('_friends-list')
        </div>
    </div>
@endsection
