<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/cardinal.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/fontAwesome.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
    <title>Mis Cursos</title>
</head>
<body>
    <section class="menu-lateral" id="menu_lateral">
        <div class="logo-small-container">
            <img src="{{URL::asset()}}" id="img_logo_small" alt="">
        </div>
        <div class="logo-container">
            <img src="img/moonlight/Moonlight-Have-less,-do-more,-be-more.png" id="img_logo" alt="">
        </div>
        <nav class="nav" id="nav_arrow">
            <ul class="list">
                <li class="list__item">
                    <div class="list__button">
                        <i class="fal fa-home list__img"></i>
                        <a href="#" class="nav__link">Home</a>
                    </div>
                </li>
                <li class="list__item list__item--click">
                    <div class="list__button list__button--click">
                        <i class="fal fa-home list__img" ></i>
                        <a href="#" class="nav__link">Servicios</a>
                        <img src="img/iconos/arrow.svg " class="list__arrow">
                    </div>
                    <ul class="list__show">
                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                        </li>
                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                        </li>
                    </ul>
                </li>
                <li class="list__item">
                    <div class="list__button">
                        <i class="fal fa-home list__img" ></i>
                        <a href="#" class="nav__link">Estadisticas</a>
                    </div>
                </li>
                <li class="list__item list__item--click">
                    <div class="list__button list__button--click">
                        <i class="fal fa-home list__img" ></i>
                        <a href="#" class="nav__link">Notificaciones</a>
                        <img src="img/iconos/arrow.svg" class="list__arrow">
                    </div>
                    <ul class="list__show">
                        
                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                        </li> <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                        </li>
                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                        </li>
                    </ul>
                </li>
                <li class="list__item">
                    <div class="list__button">
                        <i class="fal fa-home list__img" ></i>
                        <a href="#" class="nav__link">Contacto</a>
                    </div>
                </li>
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
                <a href="#"><i class="far fa-search"></i></a>
                <input type="text" class="search-input" placeholder="Search here...">
            </div>
            <div class="header-icons">
                <a class="close-session icon-1 notify-icon">
                    <i class="fal fa-envelope"></i>
                </a>
                <a class="close-session icon-2 notify-icon">
                    <i class="fal fa-bell "></i>
                </a>
                <div class="img-perfil">
                    <a href="#">
                        <img src="img/perfil-1.png" alt="">
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
                            <li>Moonlight &nbsp; ></li>
                            <li> Docente  &nbsp;></li>
                            <li> Mis Cursos </li>
                        </ul>
                    </div>
                    <div class="button">
                        <a href="#" class="button-report">Create Report</a>
                    </div>
                </div>
                <div class="frontPage-body">
                    dfgasdf
                </div>
            </div>
        </div>

    </section>
    <script src="{{URL::asset('js/cardinal.js')}}"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>