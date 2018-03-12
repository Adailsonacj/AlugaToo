<?php
require_once "daos/DaoEndereco.php";
//require_once "daos/DaoCidades.php";

if (isset($_POST["btnCadastraEndereco"])):

    $estado = filter_input(INPUT_POST, "Estado", FILTER_SANITIZE_MAGIC_QUOTES);
    $cidade = filter_input(INPUT_POST, "cidade", FILTER_SANITIZE_MAGIC_QUOTES);
    $bairro = filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_MAGIC_QUOTES);
    $longradouro = filter_input(INPUT_POST, "longradouro", FILTER_SANITIZE_MAGIC_QUOTES);
    $numero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_MAGIC_QUOTES);

    #$cit = new daoCidades();
    #$cit->adicionaCidade($cidade, $estado);
    $end = new daoEndereco();
    $end->novoEndereco($bairro, $numero, $longradouro, $numero, 4);
endif;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlugarToo</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/js/bootstrap.min.js" rel="stylesheet">
    <link href="bootstrap/css/signin.css" rel="stylesheet">
</head>
<body>
<div id="navbar">
    <?php include 'navbar.php'; ?>
</div>
<div class="container">
    <form method="POST" action="">

        <input type="text" name="Estado" placeholder="Selecione seu estado#" class="form-control"><br>

        <input type="text" name="cidade" placeholder="Digite o nome de sua cidade" class="form-control"><br>

        <input type="text" name="bairro" placeholder="Digite Bairro" class="form-control"><br>

        <input type="text" name="longradouro" placeholder="Digite seu longradouro" class="form-control"><br>

        <input type="text" name="numero" placeholder="Seu número" class="form-control"><br>

        <input type="submit" name="btnCadastraEndereco" value="Cadastrar" class="btn btn-success"><br><br>

    </form>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>