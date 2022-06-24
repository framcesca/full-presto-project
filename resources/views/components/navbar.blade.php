<nav class="navbar navbar-expand-lg presto-nav navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand py-3" href="/">
            <img src="/../media/logo.svg" alt="" width="120">        
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('indexAds')}}">Annunci</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @guest    
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Log-in</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('createAd')}}">Nuovo annuncio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- <li><a class="dropdown-item" href="#">Profilo</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">I miei annunci</a></li>
                        <li><hr class="dropdown-divider"></li> --}}
                        @if (Auth::user()->is_revisor)                           
                        <li><a class="dropdown-item position-relative" href="{{route('revisorDashboard')}}">Da revisionare
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{App\Models\Ad::toBeRevisionedCount()}}
                        </span></a></li>
                        <li><hr class="dropdown-divider"></li>
                        @endif
                        <a class=" nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>      
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </ul>
                </li>
                @endguest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lingue
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">ITA</a></li>
                        {{-- <li><a class="dropdown-item" href="#">ENG</a></li>
                        <li><a class="dropdown-item" href="#">ESP</a></li> --}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>