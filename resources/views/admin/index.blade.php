<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/cardinal.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome.css') }}">
</head>

<body>
    <div class="content-menu" id="content_menu">
        <div class="nav-bar">
            asdf
        </div>
    </div>
    <div class="content-body">
        <div class="content-top-bar">
            <div class="top-bar">
                <i class="fad fa-bars" id="open_menu"></i>
                <div class="content-search-input">
                    <input type="text" class="search" id="search" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="icons">
                    <i class="fad fa-envelope" id="message_icon"><div class="circle button" id="button-0"></div></i>
                    
                    <i class="fad fa-bell" id="notification_icon" ><div class="circle button" id="button-1"></div></i>
                    <i class="fad fa-cog" id="config_icon"></i>
                    <a href="/login"><img src="{{URL::asset('img/cardinal/login/brain.webp')}}"width="35px" height="35px"; alt="">
                    <span>Aldahir Ruiz Valdez</span></a>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="card">
                <div class="card-header">Headers</div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/cardinal.js') }}"></script>
</body>

</html>
