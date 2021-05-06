<h3 class="has-text-weight-bold is-size-3 mb-4">Following</h3>

<ul>
    @forelse(auth()->user()->follows as $user)
    <li class="mb-4">
        <div class="">
            <a class="" href="{{ $user->path() }}">
                <img src="{{ $user->avatar }}" alt="Friend profile picture" class="width-30 rounded-full p-1 shadow">

                {{ $user->name }}
            </a>
        </div>
    </li>
    @empty
        <li>No friends yet.</li>
    @endforelse
</ul>