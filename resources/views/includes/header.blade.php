<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top border border-bottom">
    <div class="container">
        <a class="text-muted navbar-brand" href="{{ url('/') }}">
            Laravel
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                {{-- <li class="nav-item">
                    <a id="home" class="nav-link" href="/">
                        Home
                    </a>
                </li> --}}
                @guest
                    <li class="nav-item">
                        <a id="project" class="nav-link" href="/project">
                            Project
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="contact" class="nav-link" href="/contact">
                            Contact
                        </a>
                    </li>
                @endguest
                <li class="nav-item">
                    <a id="articles" class="nav-link" href="/articles">
                        Blog
                    </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a id="login" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a id="register" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/dashboard">
                                Dashboard
                            </a>
                            <a class="dropdown-item" href="/statistics">
                                Statistics
                            </a>
                            <a class="dropdown-item" href="{{route('logout')}} "onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>