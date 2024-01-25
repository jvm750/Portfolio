<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    .custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}

.inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}

.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: white;
    background-color: #1BBC9D;
    display: inline-block;
    cursor: pointer;
    padding: 8px 12px;
}

.inputfile:focus + label,
.inputfile + label:hover {
    background-color: #16161A;
}
</style>
<body style="overflow: hidden; background-color:#16161A;">
    <div id="app" style="background-color:#16161A;">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm c-white" style="background-color:#242629;">
            <div class="container" style="color: white; ">
                <a class="navbar-brand" style="color: white; border: none; cursor: pointer; transition: color 0.3s, font-size 0.3s; font-size: 12px;" onmouseover="this.style.color='#1BBC9D'; this.style.fontSize='120%'" onmouseout="this.style.color='white'; this.style.fontSize='16px'" href="{{ url('/') }} ">
                    {{ config('app.name', 'Laravel') }} - Portfolio
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"  >
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto"  >
                    @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white; border: none; cursor: pointer; transition: color 0.3s, font-size 0.3s; font-size: 16px;" onmouseover="this.style.color='#1BBC9D'; this.style.fontSize='120%'" onmouseout="this.style.color='white'; this.style.fontSize='16px'" href="{{ route('proyectos.index') }}">{{ __('Projects') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white; border: none; cursor: pointer; transition: color 0.3s, font-size 0.3s; font-size: 16px;" onmouseover="this.style.color='#1BBC9D'; this.style.fontSize='120%'" onmouseout="this.style.color='white'; this.style.fontSize='16px'" href="{{ route('technologies.index') }}">{{ __('Technologies') }}</a>
                                </li>
                     @endif
                    </ul>
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white; border: none; cursor: pointer; transition: color 0.3s, font-size 0.3s; font-size: 16px;" onmouseover="this.style.color='#1BBC9D'; this.style.fontSize='120%'" onmouseout="this.style.color='white'; this.style.fontSize='16px'" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="color: white; border: none; cursor: pointer; transition: color 0.3s, font-size 0.3s; font-size: 16px;" onmouseover="this.style.color='#1BBC9D'; this.style.fontSize='120%'" onmouseout="this.style.color='white'; this.style.fontSize='16px'" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: white; border: none; cursor: pointer; transition: color 0.3s, font-size 0.3s; font-size: 16px;" onmouseover="this.style.color='#1BBC9D'; this.style.fontSize='120%'" onmouseout="this.style.color='white'; this.style.fontSize='16px'" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" style="color: black; border: none; cursor: pointer; transition: color 0.3s, font-size 0.3s; font-size: 16px;" onmouseover="this.style.color='#052840'; this.style.fontSize='120%'" onmouseout="this.style.color='#052840'; this.style.fontSize='16px'" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
