<div class="light container-small">

    <nav id="nav-desktop">

        <a id="nav-link-logo" href="/">JA.</a>
        <a class="nav-link" href="/#contact">Contact</a>
        <a class="nav-link" href="/about">About</a>
        <a class="nav-link" href="/#work">Work</a>

        <!-- Authentication Links -->
        @guest
            
        @else

            <a class="nav-link" href="/dash">Dash</a>

        @endguest

    </nav>

</div>