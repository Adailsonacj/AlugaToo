<?php

//require_once 'daos/DaoCidades.php';
if (isset($_POST['btnLogin'])):

    $input1 = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_MAGIC_QUOTES);
    $input2 = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);

    //$vr = new daoCidades;
    //echo $vr->adicionaCidade($input1, $input2);

endif;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entre no sistema</title>
    <link href="node_modules/bootstrap/dist/css/signin.css" rel="stylesheet">
</head>
<body>
<div id="navbar">
    <?php include "navbar.php"; ?>
</div>
<div class="container">
    <div class="form-signin" style="background: #42dea4;">
        <h2 class="text-center">Login</h2>
        <form method="POST" action="ValidaLogin.php">
            <!--<label>Usuário</label>-->
            <input type="text" name="login" placeholder="Digite o seu usuário" class="form-control"><br>

            <!--<label>Senha</label>-->
            <input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"><br>

            <input type="submit" name="btnLogin" value="Acessar" class="btn btn-success btn-block">

            <div class="center" style="margin-top: 20px;">
                <a href="formEndereco.php">Cadastre-se</a>
            </div>


        </form>
    </div>
</div>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>