<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Optimus Server</title>
    <link rel="stylesheet" href="estilos/main.css">
</head>
<body class="background">

    <div class="main-container">

        <div class="lang-container">

        </div>

        <nav class="menu-container">

            <img src="img/icons/logo.png" id="logo">

            <ul>
                <li @if(Request::url() == route('raiz')) class="selected" @endif><a href="{{route('raiz')}}"> INICIO </a></li>
                <li><a href="#"> TIENDA </a></li>
                <li><a href="#"> COMUNIDAD </a></li>
                <li><a href="#"> FAQ </a></li>
                <li><a href="#"> COMPRA </a></li>
            </ul>
        </nav>

        <div class="banner-container">
            <img src="img/banner/1.jpg">
        </div>

    </div>

    @yield('content')


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v9.0" nonce="RUW9PdAk"></script>
    
</body>
</html>