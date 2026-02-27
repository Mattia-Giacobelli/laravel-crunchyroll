<header>
    
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <div>
                    <ul class="navbar-nav">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('anime.index') ? 'active' : '' }}" 
                                    href="{{ url('anime') }}">{{__('Anime')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('genre.index') ? 'active' : '' }}" 
                                    href="{{ url('genre') }}">{{__('Genre')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('type.index') ? 'active' : '' }}" 
                                    href="{{ url('type') }}">Type</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('dub.index') ? 'active' : '' }}" 
                                    href="{{ url('dub') }}">Dub</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('sub.index') ? 'active' : '' }}" 
                                    href="{{ url('sub') }}">Sub</a>
                            </li>
                        @endguest
                    </ul>
                </div>
                

                <div class="d-flex justify-content-end">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse navbar-dark" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav navbar-dark bg-dark ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-dark dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item  text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
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
                
            </div>
        </nav>


</header>