<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert.css') }}">
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon"/>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <div class="contenedor">
        <div class="img">
            <img src="{{ asset('assets/img/bg.svg') }}" alt="">
        </div>
        <div class="contenido-login">

            <form autocomplete="off" method="POST" action="{{ url('/login') }}" role="form">
                @csrf 

                <img src="{{ asset('assets/img/logo.png') }}" alt="">
                <h2>Login</h2>

                @if ($errors->any())
                    <div style="color:#FF0000;text-align:center;font-size:18px; margin-bottom: 15px;">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="input-div nit">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="usuario" value="{{ old('usuario') }}" autocomplete="off" placeholder="USUARIO">
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="clave" placeholder="CONTRASEÑA">
                    </div>
                </div>

                <div class="row" id="load" hidden="hidden">
                    <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                        <img src="{{ asset('assets/img/load.gif') }}" width="100%" alt="">
                    </div>
                    <div class="col-xs-12 center text-accent">
                        <span>Validando información...</span>
                    </div>
                </div>
   
                <button class="btn" type="submit">Iniciar sesion</button> 
            </form>

        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
</body>
</html>