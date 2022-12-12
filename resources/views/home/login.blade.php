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

    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
    <title>Cardinal</title>
</head>

<body>
    <section class="login-content-form">
        <div class="card-one">
            <div class="content">
                <header>
                    <div class="tittle-form">
                        <h2 class="tittle-cardinal">Sistema Cardinal</h2>
                        <h2 class="tittle-sistem">Registro de Seguimiento Académico</h2>
                    </div>
                    <div class="logo-form">
                        <img src="{{ URL::asset('img/cardinal/login/user.png') }}" alt="">
                    </div>
                </header>
                <div class="body">
                    <div class="group-form">
                        <label for="user">Usuario:</label>
                        <input type="text" id="user" name="user" placeholder="Ingrese su usuario" required>
                    </div>
                    <div class="group-form">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" placeholder="Ingrese su contraseña" required>
                    </div>
                    <div class="group-form">
                        <button class="login-button">Iniciar Sesión</button>
                    </div>
                    <div class="group-form">
                        <a href="#" id="forgot_password" name="forgot_password">Olvidé mi contraseña</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-two">
            
        </div>


    </section>
</body>

</html>
