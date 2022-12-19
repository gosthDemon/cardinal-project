<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/cardinal.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontAwesome.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
                <li class="primary-item"><span><i class="fal fa-school"></i>Cursos</span></li>
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
                <div class="frontPage-header">
                    <div class="tittle">
                        <h1>Dashboard</h1>
                        <ul>
                            <li>Cardinal &nbsp;></li>
                            <li>Docente &nbsp;></li>
                            <li>Mis Cursos </li>
                        </ul>
                    </div>
                    <div class="button">
                        <a href="#" class="button-report">Create Report</a>
                    </div>
                </div>
                <div class="frontPage-body card">
                    <div class="card-header">
                        afsd
                    </div>
                    dfgasdf <br>
                    sdfasd
                    bsdf as <br>
                    d fsd <br>
                    dsfad <br> <br> <br>
                    sfa <br>
                    sdf <br> <br>
                    asdf
                    asdf
                    <div class="card-footer">
                        afsd
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://code.jquery.com/jquery-3.6.2.js" integrity="sha256-pkn2CUZmheSeyssYw3vMp1+xyub4m+e+QK4sQskvuo4=" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/cardinal.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>


<div class="class_one">
    <div class="class_two"></div>
</div>
<div class="class_one">
    <div class="class_four"></div>
    <div class="class_two"></div>
</div>
<div class="class_one">
    <div class="class_six"></div>
    <div class="class_two"></div>
</div>
<div class="class_one">
    <div class="class_five"></div>
    <div class="class_two"></div>
</div>
<div class="class_one">
    <div class="class_two"></div>
</div>
