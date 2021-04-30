<div class="is-flex p-4 border-bottom">
    <div class="mr-4 width-10">
        <img 
            src="https://i.pravatar.cc/40?u={{ $tweet->user->email }}" 
            alt="Friend profile picture" 
            class="rounded-full p-1"
        >
    </div>

    <div class="width-90">
        <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        <p class="text word-wrap">
            {{ $tweet->body }}    
        </p>
    </div>
</div>