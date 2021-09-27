<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pestaña_name')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: 	#6495ED;">
            {{-- {{ dump( request()->path())}} --}}
       {{-- {{ dump( request()->routeIs('saludo'))}}    --}} {{--  bota valor boolenao --}}

        <a class="navbar-brand" href="index.php">
            <span class="fas fa-handshake"></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">

                    {{-- <li class="{{request()->routeIs('home')?'active':' '}}"><a href="/">Home</a></li> --}}
                    <a class="nav-link" href="/">
                            <span class="fas fa-house-user"></span> Home <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/saludame">
                        <span class="fas fa-id-card-alt"></span> Saludo
                    </a>
                </li>
    
                
            </ul>
    
        </div>
    </nav>


   
   
       
    @yield('content')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>