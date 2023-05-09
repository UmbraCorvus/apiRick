<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow">
            <div>
                <a class="navbar-brand" href="#">Rick and Morty</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/prueba">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/personajes">Personajes</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header shadow-sm">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Rick and Morty</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="/prueba">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/personajes">Personajes</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>