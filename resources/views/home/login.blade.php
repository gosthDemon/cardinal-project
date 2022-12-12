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
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <form method="POST" action="{{ route('login') }}">
        @csrf
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
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="group-form">
                                <label for="email">Usuario:</label>
                                <input type="email" id="email" name="email" value="{{ old('email', '') }}"
                                    placeholder="Ingrese su usuario" required>
                            </div>
                            <div class="group-form">
                                <label for="password">Contraseña:</label>
                                <input type="password" id="password" name="password"
                                    placeholder="Ingrese su contraseña" required>
                                <div class="row">
                                    <input type="checkbox" id="show_password" name="show_password"
                                        class="show-password"> <label for="show_password">&nbsp; Ver contraseña</label>
                                </div>
                            </div>
                            {{-- <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div> --}}
                            <div class="group-form">
                                    <div class="error-form-input">&nbsp; @error('email'){{ $message }}@enderror</div>
                            </div>
                            <div class="group-form">
                                <button class="login-button">Iniciar Sesión</button>
                            </div>

                            <div class="group-form">
                                <a href="#" class="forgot-password" id="forgot_password"
                                    name="forgot_password">¿Ha
                                    olvidado su contraseña?</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="card-two">
            </div>
        </section>

        <script>
            let show_password = document.getElementById('show_password');
            let password = document.getElementById('password');

            show_password.addEventListener('click', function() {
                if (show_password.checked) {
                    if (password.type === 'password') {
                        password.type = "text";
                    } else {
                        password.type = "password";
                    }
                } else {
                    if (password.type === 'password') {
                        password.type = "text";
                    } else {
                        password.type = "password";
                    }
                }
            });
        </script>
</body>

</html>
