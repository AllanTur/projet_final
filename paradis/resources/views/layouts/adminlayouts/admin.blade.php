<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Le paradis de la plaine</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">


    <!-- Lien BootStrap CSS Version 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <!-- Lien CDN Font-Awesome -->
    <script src="https://kit.fontawesome.com/26a1275860.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- CSS  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dashmain.css') }}">

    <title>Dashboard</title>
</head>

<body>
    <nav>
        <div class="logo-name">

            <div class="logo-image">
                <ul style="margin-left: 20px;">
                    <li style='margin: 5px;cursor: pointer;'>
                        <a href="{{ route('admin.index') }}">LOGO</a>
                    </li>

                    <li style='margin: 5px;cursor: pointer;'>
                        <i id="burger" class="fa-solid fa-bars sidebar-toggle"
                            style='padding-left:10px;color:skyblue;font-size: 24px;'></i>
                    </li>

                    <li style='margin: 5px;cursor: pointer;'>
                        <ul style='padding-left:10px;' class="logout-mode">
                            <li class="mode">
                                <div class="mode-toggle">
                                    <span class="switch"></span>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!-- <span class="logo_name">TMG</span> -->
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="{{ route('admin.users.index') }}">
                        <i class="fa-solid fa-users"></i>
                        <span class="link-name">Utilisateur</span>
                    </a></li>


                <li><a href="{{ route('admin.bungalows.index') }}">
                        <i class="fa-solid fa-house-chimney"></i>
                        <span class="link-name">Bungalows</span>
                    </a></li>


                <li><a href="{{route('admin.reservations.index')}}">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span class="link-name">Réservations</span>
                    </a></li>

                <li><a href="{{ route('accueil') }}">
                    <i class="fa-solid fa-pager"></i>
                        <span class="link-name">Page d'accueil</span>
                    </a></li>

                <li style="padding-top: 10px">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a :href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span style="cursor: pointer" class="link-name">Déconnexion</span>
                        </a>
                    </form>
                </li>

            </ul>
        </div>
    </nav>

    @yield('content')




    <!-- Lien BootStrap JavaScript Version 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>

    <!-- dashmain.js -->
    <script src="{{ asset('javascript/dashmain.js') }}"></script>
</body>

</html>



{{-- ############################### --}}

{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Le paradis de la plaine</title> --}}

    <!-- Fonts -->
    {{--
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <!-- Lien BootStrap CSS Version 5.1 -->
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    --}}

    <!-- Lien BootStrap CSS Version 5.2 -->
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head> --}}


<!-- Lien CDN Font-Awesome -->
{{-- <script src="https://kit.fontawesome.com/26a1275860.js" crossorigin="anonymous"></script> --}}

<!-- Scripts -->
{{-- @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <nav style='width:100%' class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('admin.index') }}">LOGO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('admin.users.index') }}">Utilisateurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.bungalows.index') }}">Bungalows</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('admin.reservations.index') }}">Réservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('accueil') }}">Page d'accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="btn btn-secondary dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->prenom }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear"></i> Paramètre</a></li>
                            --}}
                            {{-- <li><a class="dropdown-item" href="#">Another action</a></li> VRAI COMMENTAIRE--}}
                            {{-- <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="button" :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="btn btn-danger m-2">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                        {{ __('Déconnexion') }}
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content') --}}

    <!-- Lien BootStrap JavaScript Version 5.2 -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html> --}}