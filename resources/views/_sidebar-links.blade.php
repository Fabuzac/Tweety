<ul>
    <li>
        <a class="has-text-weight-bold is-size-4 mb-3 block" href="{{ route('home') }}">Home</a>
    </li>

    <li>
        <a class="has-text-weight-bold is-size-4 mb-3 block" href="/contact">Contact us</a>
    </li>

    <li>
        <a class="has-text-weight-bold is-size-4 mb-3 block" href="/explore">Explore</a>
    </li>

    @auth
        <li>
            <a class="has-text-weight-bold is-size-4 mb-3 block" href="{{ route( 'profile', auth()->user() ) }}">Profile</a>
        </li>

        <li>
            <a class="has-text-weight-bold is-size-4 mb-3 block"
                href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            >
                {{ __('Logout') }}
            </a>

            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                @csrf            
            </form>
        </li>
    @endauth
</ul>