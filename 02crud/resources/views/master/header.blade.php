<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">
            @auth
                <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('schools.index') }}">Schools</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('teachers.index') }}">Teachers</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('courses.index') }}">Courses</a></li>

            @endauth
        </ul>

        <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
