<div class="grey container-small">

    <footer>

        <a target="_blank" href="https://github.com/jordanalamilla">Github</a>
        <a target="_blank" href="https://www.linkedin.com/in/jordanalamilla/">LinkedIn</a>
        <a target="_blank" href="https://blog.jordanalamilla.ca/">Blog</a>

        @guest

            <a href="{{ route('login') }}">{{ __('Admin') }}</a>
            {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
            
        @else

            <a class="dropdown-item"
               href="{{ route('logout') }}"
               onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        @endguest

    </footer>

</div>