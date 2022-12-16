<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/cardinal1.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.css') }}">
</head>

<body>
    <div class="mobile-menu" id="mobile_menu">
        <header>
            <i class="fal fa-times" id="close_menu_mobile"></i>
        </header>
        <div class="body-mobile-menu" id="body_menu_mobile">
            <ul>
                <li><a href="#" class="home-icon"><i class="fal fa-home"></i> Home</a></li>
                <li><a href="#" class="school-icon"><i class="fal fa-school "></i> Mis Cursos</a></li>
                <li><a href="#" class="calendar-icon"><i class="fal fa-calendar"></i> Calendario</a></li>
                <li><a href="#" class="users-icon"><i class="fal fa-users"></i> Usuarios</a></li>
                <li><a href="#" class="folder-icon"><i class="fal fa-folder"></i> Reportes</a></li>
            </ul>
        </div>
    </div>
    {{-- <div class="content-menu" id="content_menu">
        <div class="nav-bar">
        </div>
    </div>
    <div class="content-body" id="content_body">
        <div class="body">
            <div class="header" id="top_bar" >
                <div class="top-bar-web" id="top_bar_web">
                    <i class="fad fa-bars" id="open_menu"></i>
                    <div class="content-search-input">
                        <input type="text" class="search" id="search" placeholder="Search...">
                        <button><i class="fas fa-search"></i></button>
                    </div>
                    <div class="icons">
                        <i class="fad fa-envelope icon-top-bar" id="message_icon"><div class="circle button" id="button-0"></div></i>
                        
                        <i class="fad fa-bell icon-top-bar" id="notification_icon" ><div class="circle button" id="button-1"></div></i>
                        <i class="fad fa-cog icon-top-bar" id="config_icon"></i>
                        <a href="/login"><img src="{{URL::asset('img/cardinal/login/brain.webp')}}" width="35px" height="35px"; alt="">
                        <span>Aldahir Ruiz Valdez</span></a>
                    </div>
                </div>
                <div class="top-bar-mobile top-bar" id="top_bar_mobile">
                    <i class="fad fa-bars" id="open_menu_mobile"></i>
                    <div class="icons " >
                        <a href="/login"><img src="{{URL::asset('img/cardinal/login/brain.webp')}}"width="35px" height="35px"; alt=""></a>
                    </div>
                </div>
            </div>
            <div class="workspace">
                <div class="card">
                    <div class="card-header">Headers</div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <script src="{{ URL::asset('js/cardinal1.js') }}"></script>
</body>

</html>
