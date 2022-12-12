<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <link rel="stylesheet" href="{{URL::asset('css/home.css')}}">
    <title>Cardinal</title>
</head>
<body>
    <header>
        <div class="bar-nav" id="bar_nav">
            <div class="icon"> <p>Cardinal <span> Moon</span></p> </div>
            <div class="menu">
                <a href="">Home</a>
                <a href="">Portfolio</a>
                <a href="">Preview</a>
                <a href="">About me</a>
                <a href="">Sign Up</a>
                <a href="{{route('login')}}">Login</a>
            </div>
        </div>
        <div class="banner">
            <span>
                <p class="tittle">Cardinal</p>
                <p class="info">Plataforma de registro pedagógico docente <br>
                para el control y gestion de calificaciones.
                </p>
                <button>Contactanos</button>
            </span>
            <img src="{{url::asset('img/cardinal/home/add-task.png')}}" alt=""></div>
    </header>
    <section class="body">fdgasdf</section>
    <footer></footer>

    <script src="{{url::asset('js/main.js')}}"></script>
</body>
</html>