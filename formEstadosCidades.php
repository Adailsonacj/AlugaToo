<?php
require_once "daos/DaoEstados.php";

if (isset($_POST["btnCadastraEndereco"])):

    $estado = filter_input(INPUT_POST, "Estado", FILTER_SANITIZE_MAGIC_QUOTES);

    $estados = new DaoEstados();
    $estados->getEstados();
    print_r($estados);
endif;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlugarToo</title>
</head>
<body>
<div id="navbar">
    <?php include "navbar.php"; ?>
</div>
<div class="container">
    <form method="POST" action="">

        <div id="btnSubmit">
            <input type="submit" name="btnCadastraEndereco" value="Cadastrar" class="btn btn-success"><br><br>

        </div>
    </form>
</div>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>