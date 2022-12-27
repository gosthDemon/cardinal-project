<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/fontAwesome.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/cardinal.css') }}">
    @livewireStyles
    <title>Mis Cursos</title>
</head>

<body>
    <section class="menu-lateral" id="menu_lateral">
        <div class="logo-small-container">
            <img src="{{ URL::asset('img/moonlight/Moonlight-Logo.png') }}" id="img_logo_small" alt="">
        </div>
        <div class="logo-container">
            <div id="img_logo">

            </div>
            {{-- <img src="{{URL::asset('img/moonlight/Moonlight-Have-less,-do-more,-be-more.png')}}"id="img_logo" alt=""> --}}
        </div>
        <nav class="nav" id="nav_arrow">
            <ul class="menu-content">
                <li class="primary-item"><span><i class="fal fa-home"></i>Home</span></li>
                <li class="primary-item"><span><i class="fal fa-chalkboard-teacher"></i>Cursos</span></li>
                <li class="primary-item contain-list-secondary"><span><i class="fal fa-users"></i>Usuarios</span>
                </li>
                <ul class="content-secondary-item" >
                    <li class="secondary-item"><span>Administradores</span></li>
                    <li class="secondary-item"><span>Docentes</span></li>
                    <li class="secondary-item"><span>Tutores</span></li>
                    <li class="secondary-item"><span>Estudiantes</span></li>
                </ul>
                <li class="primary-item contain-list-secondary"><span><i class="fal fa-smile"></i>Calificaciones</span></li>
                <ul class="content-secondary-item">
                    <li class="secondary-item"><span>Administradores</span></li>
                    <li class="secondary-item"><span>Docentes</span></li>
                    <li class="secondary-item"><span>Tutores</span></li>
                </ul>
                <li class="primary-item"><span><i class="fal fa-file-chart-line"></i>Reportes</span></li>
                <li class="primary-item"><span><i class="fal fa-calendar-check"></i>Calendarios</span></li>
                <li class="primary-item"><span><i class="fal fa-cog"></i>Settings</span></li>
            </ul>
        </nav>
    </section>
    <section class="menu-mobile" id="menu_mobile">
        <i class="fal fa-times close open_menu_close"></i>
        <ul>
            <li><a href="#"><i class="fal fa-home"></i> Home</a></li>
            <li><a href="#"><i class="fal fa-chalkboard-teacher"></i> Mis Cursos</a></li>
            <li><a href="#"><i class="fal fa-users"></i> Estudiantes</a></li>
            <li><a href="#"><i class="fal fa-cog"></i> Configuraciones</a></li>
            <li><a href="#"><i class="fal fa-plus-square"></i> Extras</a></li>
        </ul>
    </section>
    <section class="container-body" id="container_body">

        <div class="header">
            <a href="#" class="open-menu-icon open_menu_close" id="open_menu_close">
                <i class="fal fa-bars"></i>
            </a>
            <div class="search-input-container">
                <a href="#"><i class="fad fa-search"></i></a>
                <input type="text" class="search-input" placeholder="Search here...">
            </div>
            <div class="header-icons">
                <a class="close-session icon-1 notify-icon">
                    <i class="fad fa-envelope"></i>
                </a>
                <a class="close-session icon-2 notify-icon">
                    <i class="fad fa-bell "></i>
                </a>
                <div class="img-perfil">
                    <a href="#">
                        <img src="{{ URL::asset('img/cardinal/login/brain.webp') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="content">
                @yield('content-body')
            </div>
        </div>
    </section>
    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/cardinal.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    @yield('script')
</body>
</html>
