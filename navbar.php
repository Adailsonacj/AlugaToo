<?php include 'LayoutPadrao.php';
LayoutPadrao::TODO();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlugaToo</title>
</head>
<body>
<div class="container">
    <div id="navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">AlugaToo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorias
                        </a>
                        <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Jardinagem</a>
                            <a class="dropdown-item" href="#">Civil</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Agua</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Faça login</a>
                    </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="paginaUsuario.php">Minha Página</a>
                        </li>
                    <?php if (isset($_SESSION["login"]) || isset($_SESSION["login"])) {
                        ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="sair.php">Sair</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
    </div>
</div>
</body>
</html>