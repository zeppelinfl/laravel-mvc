<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/admin') }}">
            {{ config('adminapp.name', 'Laravel MVC Admin') }}
        </a>
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('frontapp.name', 'Home') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('Content') }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('contactA') }}">
                            {{ __('Contacts') }}
                        </a>
                         <a class="dropdown-item" href="{{ route('reviewA') }}">
                            {{ __('Reviews') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('pageA') }}">
                            {{ __('Pages') }}
                        </a>
                         <a class="dropdown-item" href="{{ route('categoryA') }}">
                            {{ __('Categories') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('subcategoryA') }}">
                            {{ __('Subcategories') }}
                        </a>
                         <a class="dropdown-item" href="{{ route('experienceA') }}">
                            {{ __('Experiences') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('typeA') }}">
                            {{ __('Types') }}
                        </a>
                    </div>
                </li>
            </ul>
             <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('Locations') }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('countryA') }}">
                            {{ __('Countries') }}
                        </a>
                         <a class="dropdown-item" href="{{ route('cityA') }}">
                            {{ __('Cities') }}
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('Events') }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('eventA') }}">
                            {{ __('Events List') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('eventCreateA') }}">
                            {{ __('Create Event') }}
                        </a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ __('Places') }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('placeA') }}">
                            {{ __('List Places') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('placeCreateA') }}">
                            {{ __('Create Places') }}
                        </a>
                    </div>
                </li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                             <a class="dropdown-item" href="{{ route('userUpdateA', Auth::user()->id) }}">
                                {{ __('Update user') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
