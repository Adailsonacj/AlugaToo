<?php

session_start();
require_once 'daos/DaoCidades.php';
if (isset($_POST['btnLogin'])):

    $input1 = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_MAGIC_QUOTES);
    $input2 = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);

    $vr = new daoCidades;
    echo $vr->adicionaCidade($input1, $input2);

endif;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entre no sistema</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/signin.css" rel="stylesheet">
    <link href="bootstrap/js/bootstrap.min.js" rel="stylesheet">
</head>
<body>
<div id="navbar">
    <?php include "navbar.php"; ?>
</div>
<div class="container">
    <div class="form-signin" style="background: #42dea4;">
        <h2 class="text-center">Login</h2>
        <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        if (isset($_SESSION['msgcad'])) {
            echo $_SESSION['msgcad'];
            unset($_SESSION['msgcad']);
        }
        ?>
        <form method="POST" action="">
            <!--<label>Usuário</label>-->
            <input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control"><br>

            <!--<label>Senha</label>-->
            <input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"><br>

            <input type="submit" name="btnLogin" value="Acessar" class="btn btn-success btn-block">

            <div class="center" style="margin-top: 20px;">
                <a href="formEndereco.php">Cadastre-se</a>
            </div>


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