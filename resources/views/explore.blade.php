@extends('layouts.app')

@section('content')

<div>
    @foreach ($users as $user)
        <a href="{{ $user->path() }}" class="flex items-center mb-5">
            <img class="rounded-full shadow" width="100" src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar">

            <div>
                <h4 class="mb-5 font-bold">{{ '@' . $user->username }}</h4>
            </div>
        </a>
    @endforeach

    {{ $users->links() }}
</div>

  
@endsection