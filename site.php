<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Carioca Sweeties</title>
</head>

<body class="color">
    <header class="custom-bg">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="nav" href="?page=destaques">
                    <img src="img/icons/logo.jpg" width="70px" height="70px" alt="Logo">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?page=destaques">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">Doces</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="?page=tortas">Tortas</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="?page=banoffeEbombomaberto">Banoffe & Bombom aberto</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="?page=coxinhaDemorango">Coxinhas de morango</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="?page=palhaItaliana">Palha italiana</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="?page=copoDfel">Copo da felicidade</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=cadastrar">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=sobrenos">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=listar">Sugestões</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" onsubmit="event.preventDefault(); search();">
                        <input class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Search"
                               id="pesquisa">
                        <button class="btn" type="submit"><img src="img/icons/lupa.png" width="30px"></button>
                    </form>
                    <button class="btn" type="button"><img src="./img/icons/user.png" width="35px"></button>
                    <button class="btn" type="button"><img src="./img/icons/carrinho.png" width="40px"></button>
                </div>
            </div>
        </nav>
    </header>

    <?php 
    include("config.php");
    switch(@$_REQUEST["page"]) {
        case "cadastrar":
            include("cadastrar.php");
        break;
        case "sobrenos":
            include("sobrenos.php");
        break;
        case "editar":
            include("editar.php");
        break;
        case "listar":
            include("listar.php");
        break;
        case "salvar":
            include("salvar.php");
        break;
        case "tortas":
            include("tortas.php");
            break;
        case "banoffeEbombomaberto":
            include("banoffeEbombomaberto.php");
            break;
        case "palhaItaliana":
            include("palhaItaliana.php");
            break;
        case "coxinhaDemorango":
            include("coxinhaDemorango.php");
            break;
        case "copoDfel":
            include("copoDfel.php");
            break;
        default:
            include("destaques.php");
            break;
    }
    ?>

<footer class="stylefooter fixed-bottom">
    <p class="p-2 m-0 text-center">© 2024 Todos os direitos reservados por Ellaiser Neiva.</p>
</footer>

</body>

</html>
