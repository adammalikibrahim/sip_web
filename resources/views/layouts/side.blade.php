<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <!-- Scripts -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="{{url('assets/vendors/bootstrap/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{url('assets/style/side.css')}}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
    <div class="sidebar close">
        <!-- ========== Logo ============  -->
        <a href="#" class="logo-box">
            <i class='bx bx-menu'></i>
            <div class="logo-name">
                <img src="{{url('assets/img/logo sip.png')}}" alt="">
            </div>
        </a>

        <!-- ========== List ============  -->
        <ul class="sidebar-list">
            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bxs-home'></i>
                        <span class="name">Beranda</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Beranda</a>
                    <!-- submenu links here  -->
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-file-blank'></i>
                        <span class="name">Pelaporan Prestasi</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Pelaporan Prestasi</a>
                    <a href="{{route('laporan.index')}}" class="link">Pelaporan</a>
                    <a href="#" class="link">Status Pelaporan</a>
                    <a href="#" class="link">Prestasi Mahasiswa</a>
                    <a href="#" class="link">Jadwal Kompetisi</a>
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-file-blank'></i>
                        <span class="name">Pelaporan Insentif</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">p</a>
                    <a href="#" class="link">Web Design</a>
                    <a href="#" class="link">Login Form</a>
                    <a href="#" class="link">Card Design</a>
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-book-alt'></i>
                        <span class="name">Posts</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Posts</a>
                    <a href="#" class="link">Web Design</a>
                    <a href="#" class="link">Login Form</a>
                    <a href="#" class="link">Card Design</a>
                </div>
            </li>

            <!-- -------- Dropdown List Item ------- -->
            <li class="dropdown">
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-extension'></i>
                        <span class="name">Plugins</span>
                    </a>
                    <i class='bx bxs-chevron-down'></i>
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Plugins</a>
                    <a href="#" class="link"></a>
                    <a href="#" class="link"></a>
                    <a href="#" class="link"></a>
                </div>
            </li>



            <!-- -------- Non Dropdown List Item ------- -->
            <li>
                <div class="title">
                    <a href="#" class="link">
                        <i class='bx bx-cog'></i>
                        <span class="name">Settings</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down'></i> -->
                </div>
                <div class="submenu">
                    <a href="#" class="link submenu-title">Settings</a>
                    <!-- submenu links here  -->
                </div>
            </li>
        </ul>
    </div>

    <!-- ============= Home Section =============== -->
    <section class="home">
        <div class="toggle-sidebar">
        </div>
    </section>

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
        <div class="content-wrapper mt-5">
            @yield('content')
        </div>

    <script src="{{url('assets/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="{{url('assets/script/side.js')}}"></script>
</body>
</html>
