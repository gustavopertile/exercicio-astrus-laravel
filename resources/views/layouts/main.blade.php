<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="icon" href="/img/logo_semfundo.png">

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;900&display=swap" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid" id="navbar">
                <div id="imagemNavBar">
                    <a href="/" class="navbar-brand">
                        <img class='logo' src="/../img/logo_semfundo.png" alt="Technology Shop">
                    </a><a class="navbar-brand" href="/">Technology Shop</a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/produtos" class="nav-link">Produtos</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/categorias" class="nav-link">Marcas</a>
                    </li>
                </ul>
                @auth
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Dashboard</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    Sair
                                </a>
                            </form>
                        </li>
                    </ul>
                @endauth

                @guest

                    <div id="login">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/login" class="nav-link">Entrar</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/register" class="nav-link">Cadastrar</a>
                            </li>
                        </ul>
                    </div>
                @endguest
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>Technology Shop &copy; 2020</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>
