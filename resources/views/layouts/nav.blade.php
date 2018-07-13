<nav class="header navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            Venyu
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li><a href="/Admin">Admin</a></li>
                <li><a href="/venues">Venues</a></li>
                @if(Auth::check())
                <li><a href="/venues/create">Upload a Venue</a></li>
                <li><a href="/myvenues">My Venues</a></li>
                <li><a href="/myevents">My Events</a></li>
                @endif
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
            <div class="dropdown show">
              <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Auth::User()->name}}
              </a>

              <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="#">Subscription</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="{{ url('/logout') }}">Logout</a>
              </div>
            </div>
                @endguest
            </ul>
        </div>
    </div>
</nav>
@guest
<div class="row justify-content-center" >
    <h5 style="margin:5px"><a href="{{ route('login') }}">Log in</a> or <a href="{{ route('register') }}">register</a> for venue listing</h5>
</div>
@endguest


