<nav id="navbar" class="navbar">
    <ul>
        <li><a href="{{ url('/') }}" @stack('home')>Home</a></li>
        <li><a href="{{ url('/about') }}" @stack('about')>About</a></li>
        <li><a href="{{ url('/services') }}" @stack('services')>Services</a></li>
        <li><a href="{{ url('/projects') }}" @stack('projects')>Projects</a></li>
        <li><a href="{{ url('/contact') }}" @stack('contact')>Contact</a></li>
        @if (!Auth::user())
             <a class="login_signup " data-toggle="modal" data-target="#modalLogin">Login</a>
            <a class="login_signup " data-toggle="modal" data-target="#modalSignup">signUp</a>
        @endif
        @if (Auth::user())
            <button class="text-white btn auth" data-toggle="modal" data-target="#profileModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#feb900"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                </svg>&nbsp;
                {{ Auth::user()->name }}
            </button>
        @endif

    </ul>
</nav>
