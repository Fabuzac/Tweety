<div class="is-flex p-4 border-bottom">
    <div class="mr-4 width-10">
        <a href="{{ route('profile', $tweet->user->name) }}">
            <img 
                src="https://i.pravatar.cc/200?u={{ $tweet->user->email }}" 
                alt="Friend profile picture" 
                class="rounded-full p-1 width-90"
            >
        </a>
    </div>

    <div class="width-90">
        <a class="" href="{{ route('profile', $tweet->user->name) }}">
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        </a>
        <p class="text word-wrap">
            {{ $tweet->body }}    
        </p>
    </div>
</div>