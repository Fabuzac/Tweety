@extends('layouts.app')

@section('content')

<div>
    @foreach ($users as $user)
    <div class="card mb-4">
        <a href="{{ $user->path() }}" class="gradient-background flex items-center mb-5">
            <img class="ml-3 mb-2 mt-3 rounded-full shadow" width="100" src="{{ $user->avatar }}" alt="{{ $user->username }}'s avatar">

            <div>
                <h4 class="ml-4 mb-3 font-bold">{{ '@' . $user->username }}</h4>                
            </div>            
        </a>
        <p class="m-3">
            Bio, description Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Adipisci incidunt illum est sint quibusdam ducimus iste odio provident at
            placeat, nam culpa aspernatur deleniti fugiat excepturi et tempore, dolore a.
        </p>
    </div>
    @endforeach

    {{ $users->links() }}

</div>

  
@endsection