<!-- NAVBAR -->
@guest
        <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
        <img id="surver" class="navbar-brand" href="#" src="{{ asset('images/Surver.png') }}">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item" style="margin-top: 0.5%;">
                <a class="nav-link" href="{{ url('/') }}" style="color: #96F3FA;">Home</a>
            </li>
            <li class="nav-item" style="margin-top: 0.5%;">
                <a class="nav-link" href="/laravel_project/surverid/public/login" style="color: #96F3FA;">Login</a>
            </li>
            <li class="nav-item" style="margin-top: 0.5%;">
                
                <a class="nav-link" href="/laravel_project/surverid/public/register" style="color: #96F3FA;">Register</a>
            </li>                                                       
            </ul>
        </div>
    </nav>

@else
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
        <img id="surver" class="navbar-brand" href="#" src="{{ asset('images/Surver.png') }}">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item" style="margin-top: 0.5%;">
                <a class="nav-link" href="/laravel_project/surverid/public/home" style="color: #96F3FA;">Home</a>
            </li>
            <li class="nav-item" style="margin-top: 0.5%;">
                <a class="nav-link" href="/laravel_project/surverid/public/surverid_db/create" style="color: #96F3FA;">Create</a>
            </li>
            <li class="nav-item" style="margin-top: 0.5%;">
                <a class="nav-link" href="/laravel_project/surverid/public/surverid_db/inferno/collection" style="color: #96F3FA;">Collections</a>
            </li>
            <li id="profile" class="nav-item dropdown">
                <a style="text-align: right;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img id="PhotoProfile" src="/laravel_project/surverid/public/storage/profile_images/{{Auth::user()->image}}">
                    <span style="color: #96F3FA;">{{ Auth::user()->name }}</span>
                </a>
                <div id="dropdown" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/laravel_project/surverid/public/profile/{{Auth::user()->id}}/edit">Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                </div>
            </li>
            </ul>
        </div>
    </nav>
@endguest