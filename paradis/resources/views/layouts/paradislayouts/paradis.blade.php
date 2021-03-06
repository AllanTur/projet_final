<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Le paradis de la plaine</title>

    <!-- Lien BootStrap CSS Version 5.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Lien CDN Font-Awesome -->
    <script src="https://kit.fontawesome.com/26a1275860.js" crossorigin="anonymous"></script>

    <!-- Pour importer un date picker -->
    <script type="module" src="https://unpkg.com/caly@0.7.2/dist/caly/caly.esm.js"></script>
    <!-- Pour le style du date picker -->
    <style>
        caly-calendar {
            --grid: "misc"
                "nav"
                "mn";
        }
    </style>

</head>

<body class="font-sans antialiased">


    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            @if(auth()->check() && auth()->user()->is_admin == 1)
            <a class="navbar-brand" href="{{ route('accueil') }}">LOGO</a>
            @else
            <a class="navbar-brand" href="{{ route('/') }}">LOGO</a>
            @endif

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('catalogue') }}">Nos bungalows</a>
                    </li>
                    <!-- Vérifie si il est loguer et si c'est un administrateur pour se lien -->
                    @if(auth()->check() && auth()->user()->is_admin == 1)

                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="{{ route('admin.index') }}" :active="request()->routeIs('admin')">
                            {{ __('Panel Administrateur') }}</a>
                    </li>

                    @endif

                    <!-- Cas 1 : Si il est pas connecter ça affiche un lien de connexion ou un lien pour se créer un compte et 
                        Cas 2 : Si il est connecter ça affiche son nom et il peut se déconnecter -->
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->prenom }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
                            {{-- <li><a class="dropdown-item" href="#">Another action</a></li> --}}

                        </ul>
                        @else
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('login') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline">Connexion</a>
                    </li>

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">S'enregistrer</a>
                    </li>
                    @endif
                    @endauth
                    @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    {{-- @if (Route::has('login')) --}}
    {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
        {{-- @auth --}}
        {{-- <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">LOGO</a> --}}
        {{-- <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="button" :href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();" class="btn btn-danger m-2">
                <i class="fa-solid fa-right-from-bracket"></i>
                {{ __('Déconnexion') }}
            </button>
        </form>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif --}}

    <!-- Lien BootStrap JavaScript Version 5.2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>