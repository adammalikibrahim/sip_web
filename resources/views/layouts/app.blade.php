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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{url('assets/vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/style/app.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <div class="sidebar">
                            <div class="logo-content">
                                <div class="logo">
                                    <i class="bx bx-code-alt"></i>
                                    <div class="logo-name">Almeida Space</div>
                                </div>
                                <i class="bx bx-menu" id="toggleMenu"></i>
                            </div>
                            <ul class="nav-list">
                                <li class="nav-item">
                                    <i class="bx bx-search"></i>
                                    <input type="text" placeholder="Search . . ." class="sidebar-search">
                                    <span class="tooltip">Search</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bx bx-grid-alt"></i> <span class="nav-name">Dashboard</span>
                                    </a>
                                    <span class="tooltip">Dashboard</span>
                                    <div class="dropdown-menu">
                                        <a href="#">Dropdown Item 1</a>
                                        <a href="#">Dropdown Item 2</a>
                                        <a href="#">Dropdown Item 3</a>
                                      </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bx bx-user"></i> <span class="nav-name">User</span>
                                    </a>
                                    <span class="tooltip">User</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bx bx-chat"></i> <span class="nav-name">Messages</span>
                                    </a>
                                    <span class="tooltip">Messages</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bx bx-pie-chart-alt-2"></i> <span class="nav-name">Analytics</span>
                                    </a>
                                    <span class="tooltip">Analytics</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bx bx-folder"></i> <span class="nav-name">Fila Manager</span>
                                    </a>
                                    <span class="tooltip">File Manager</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bx bx-cart"></i> <span class="nav-name">Order</span>
                                    </a>
                                    <span class="tooltip">Order</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bx bx-heart"></i> <span class="nav-name">Saved</span>
                                    </a>
                                    <span class="tooltip">Saved</span>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="bx bx-cog"></i> <span class="nav-name">Setting</span>
                                    </a>
                                    <span class="tooltip">Setting</span>
                                </li>
                            </ul>
                            <div class="profile-content">
                                <div class="profile">
                                    <div class="profile-details">
                                        <img src="assets/images/profile.jpg" alt="Profile" class="profile-image">
                                        <div class="name-job">
                                            <div class="name">Yunus Almeida</div>
                                            <div class="job">Web Developer</div>
                                        </div>
                                    </div>
                                    <i class="bx bx-log-out" id="logout"></i>
                                </div>
                            </div>
                        </div>

                        <div class="content-wrapper">
                            @yield('content')
                        </div>
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

        <main class="py-4">

        </main>
        <script src="{{url('assets/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <script src="{{url('assets/script/side.js')}}"></script>
    </div>
</body>
</html>
