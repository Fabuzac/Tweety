<div class="is-flex p-4 {{ $loop->last ? '' : 'border-bottom' }}">
    <div class="mr-4 width-10">
        <a href="{{ route('profile', $tweet->user->name) }}">
            <img 
                src="{{ $tweet->user->avatar }}" 
                alt="Friend profile picture" 
                class="rounded-full p-1 width-90 shadow"
            >
        </a>
    </div>

    <div class="width-90">
        <a class="" href="{{ route( 'profile', auth()->user() ) }}">
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        </a>
        <p class="text word-wrap">
            {{ $tweet->body }}    
        </p>
    </div>
</div>