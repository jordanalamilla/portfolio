<div class="grey container-small">

    <footer>

        <a href="index.html">Github</a>
        <a href="index.html">LinkedIn</a>
        <a href="index.html">Blog</a>

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