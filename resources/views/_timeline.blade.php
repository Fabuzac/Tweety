<div class="border border-gray-300 rounded-lg tweet-background">
    @forelse($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="p-4">No tweets yet.</p> 
    @endforelse
    
</div>
<div class="mt-5 display-links">{{ $tweets->links() }}</div>