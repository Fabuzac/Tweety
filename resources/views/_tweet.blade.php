<div class="is-flex p-4 {{ $loop->last ? '' : 'border-bottom' }}">
    <div class="mr-4 width-10">
        <a href="{{ route('profile', $tweet->user->username) }}">
            <img 
                src="{{ $tweet->user->avatar }}" 
                alt="Friend profile picture" 
                class="rounded-full p-1 width-90 shadow"
            >
        </a>
    </div>

    <div class="width-90">
        <a class="" href="{{ route('profile', $tweet->user->username) }}">
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        </a>
        <p class="text word-wrap">
            {{ $tweet->body }}    
        </p>

        <p>
            @foreach($tweet->tags as $tag)
                <a href="/app/tweet?tag={{ $tag->name }}">#{{ $tag->name }}</a>
                
                {{-- Another way to do it --}}
                {{-- <a href="{{ route('articles.index') ['tag' => $tag->name] }}">{{ $tag->name }}</a> --}}

            @endforeach
        </p>

        @auth
            <div class="is-flex mt-3">
                {{-- Like --}}
                <form
                    class="is-flex"
                    method="POST"
                    action="/tweets/{{ $tweet->id }}/like"
                >
                    @csrf
                                        
                    <button type="submit" class="button border-none mr-1">
                        <span class="icon has-text-link">
                            <i class='fa fa-thumbs-up'></i>                    
                         </span>
                    </button>

                    <div class="mt-3 mb-3 mr-2">                    
                        <span>
                            {{ $tweet->likes ?: 0 }}
                        </span>
                    </div>    
                </form>
                
                {{-- Dislike --}}
                <form
                    class="is-flex ml-3" 
                    method="POST"
                    action="/tweets/{{ $tweet->id }}/like"
                >
                    @csrf
                    @method('DELETE')

                    {{-- {{ $tweet->isDislikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }} --}}
                    <button type="submit" class="button border-none mr-1">
                        <span class="icon has-text-danger">
                            <i class='fa fa-thumbs-down'></i>
                        </span>   
                    </button>

                    <div class="mt-3 mb-3 is-flex">
                        {{ $tweet->dislikes ?: 0 }}                                      
                    </div>
                </form>
            </div>
        @endauth
    </div>
</div>