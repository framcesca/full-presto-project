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
                    <a class="nav-link" href="{{route('indexAds')}}">{{__('ui.indexads')}}</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @guest    
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">{{__('ui.reg')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">{{__('ui.log-in')}}</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('createAd')}}">{{__('ui.catadsnew')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- <li><a class="dropdown-item" href="#">{{__('ui.profile')}}</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">{{__('ui.miei')}}</a></li>
                        <li><hr class="dropdown-divider"></li> --}}
                        @if (Auth::user()->is_revisor)                           
                        <li><a class="dropdown-item position-relative" href="{{route('revisorDashboard')}}">{{__('ui.revisoring')}}
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{App\Models\Ad::toBeRevisionedCount()}}
                        </span></a></li>
                        <li><hr class="dropdown-divider"></li>
                        @endif
                        <a class=" nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{__('ui.out')}}</a>      
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        </form>
                    </ul>
                </li>
                @endguest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.lang')}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <x-_locale lang="it" nation="it"></x-_locale>
                        </li>
                        <li>
                            <x-_locale lang="en" nation="gb"></x-_locale>
                        </li>
                        <li>
                            <x-_locale lang="es" nation="es"></x-_locale>
                        </li> 
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>