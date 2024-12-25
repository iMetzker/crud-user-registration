<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastr3.</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
    <main>
        <nav class="navbar bg-body-tertiary nav-mobile">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
                </button>
                <a class="navbar-brand" href="#"><i class="bi bi-person"></i></i></a>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header header-exit">
                        <div class="offcanvas-title logo-title" id="offcanvasNavbarLabel">
                            <i class="bi bi-boxes"></i>
                            <h5>Cadastr3</h5>
                            <span>.</span>
                        </div>
                        <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close">
                            <i class="bi bi-arrow-bar-left"></i>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php"><i class="bi bi-house-door"></i> Início</a>
                                </li>
                                <li class="nav-item nav-link nav-user-title">
                                    <i class="bi bi-person-gear"></i> Usuários
                                </li>

                                <ul class="users-ul">
                                    <li class="nav-item">
                                        <a class="nav-link" href="?page=new">Adicionar Novo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="?page=list">Listar Todos</a>
                                    </li>
                                </ul>

                            </ul>
                        </div>

                        <div class="menu-user-edit">
                            <span>Opções de Usuário</span>
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">
                                        <i class="bi bi-gear"></i> Configurações de Conta
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">
                                        <i class="bi bi-box-arrow-right"></i> Sair
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </nav>

        <div class="navbar-desktop">
            <div class="navbar-header-desktop">
                <div class="navbar-desktop-logo">
                    <div class="logo-name">
                        <i class="bi bi-boxes"></i>
                        <h5>Cadastr3</h5>
                        <span>.</span>
                    </div>
                </div>
                <a class="navbar-brand" href="#"><i class="bi bi-person"></i></i></a>
            </div>
        </div>

        <div class="navbar-desktop-content">
            <div>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="bi bi-house-door"></i> Início</a>
                    </li>
                    <li class="nav-item nav-link nav-user-title">
                        <i class="bi bi-person-gear"></i> Usuários
                    </li>

                    <ul class="users-ul">
                        <li class="nav-item">
                            <a class="nav-link" href="?page=new">Adicionar Novo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=list">Listar Todos</a>
                        </li>
                    </ul>

                </ul>
            </div>

            <div class="menu-user-edit">
                <span>Opções de Usuário</span>
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="bi bi-gear"></i> Configurações de Conta
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="bi bi-box-arrow-right"></i> Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row m-5 p-5">
                <div class="col">
                    <?php
                    include("./app/models/config.php");

                    switch (@$_REQUEST["page"]) {
                        case "new":
                            include("app/views/new-user.php");
                            break;
                        case ("list"):
                            include("app/views/list-user.php");
                            break;
                        case ("save"):
                            include("app/views/save-user.php");
                            break;
                        case ("edit"):
                            include("app/views/edit-user.php");
                            break;
                        default:
                            print "<h1>Bem vindo!</h1>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>