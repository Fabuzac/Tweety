@extends('layouts.app')

@section('content')
    <div class="is-flex">
        <div class="is-flex-grow-1">@include('_sidebar-links')</div>
        <div class="is-flex-grow-1">2</div>
        <div class="is-flex-grow-1">@include('_friends-list')</div>
    </div>
@endsection
