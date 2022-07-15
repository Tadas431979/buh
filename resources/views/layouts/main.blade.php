<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>islaidu ir pajamu planas</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
</head>
<div class="container">
    <div class="container"id="main">
        <header >
                <span class="fs-4">Buhalterine programa</span>
        </header>
        <div id="app">
            <nav id="name"class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                bla bla bla
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

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        </header>
    </div>
    </div>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Pagindinis</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Sąskaitų pildymas</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Sąskaitų peržiūra </a></li>
                <li class="nav-item"><a href="#" class="nav-link">Balansas</a></li>
                <li class="nav-item"><a href="#" class="nav-link">mažytė ataskaita</a></li>
            </ul>

        </a>

{{--        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">--}}
{{--            <li><a href="{{ route('balance') }}" class="nav-link px-2 link-secondary">Balansas</a></li>--}}
{{--            <li> <a href="{{ route('full') }}"class="nav-link px-2 link-secondary">Užpildyti išlaidas ir pajamas</a></li>--}}
{{--            <li><a href="{{ route('show') }}" class="nav-link px-2 link-dark">Peržiūrėti išlaidas</a></li>--}}
{{--        </ul>--}}
{{--        <div id="app">--}}
{{--            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--                <div class="container">--}}
{{--                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                        <span class="navbar-toggler-icon"></span>--}}
{{--                    </button>--}}

{{--                    <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                        <!-- Left Side Of Navbar -->--}}
{{--                        <ul class="navbar-nav me-auto">--}}

{{--                        </ul>--}}

{{--                        <!-- Right Side Of Navbar -->--}}
{{--                        <ul class="navbar-nav ms-auto">--}}
{{--                            <!-- Authentication Links -->--}}
{{--                            @guest--}}
{{--                                @if (Route::has('login'))--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                    </li>--}}
{{--                                @endif--}}
{{--                                bla bla bla--}}
{{--                                @if (Route::has('register'))--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                    </li>--}}
{{--                                @endif--}}
{{--                            @else--}}
{{--                                <li class="nav-item dropdown">--}}
{{--                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                        {{ Auth::user()->name }}--}}
{{--                                    </a>--}}

{{--                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                        <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                           onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                            {{ __('Logout') }}--}}
{{--                                        </a>--}}

{{--                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            @endguest--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </nav>--}}
{{--        </div>--}}

    </header>
</div>
<body>
@yield('content')


</body>
</html>

