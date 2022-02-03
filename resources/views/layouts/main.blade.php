<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
            <div class="      collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img class='logo' src="/../img/logo.svg" alt="Technology Center">
            </a>
            <a class="navbar-brand" href="/">Technology Center</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/produtos" class="nav-link">Produtos</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/categorias" class="nav-link">Categorias</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/produtos/cadastrar" class="nav-link">Cadastro de Produtos</a>
                </li>
            </ul>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer>
        <p>Technology Center &copy; 2020</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>
