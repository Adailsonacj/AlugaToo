<?php include("./database/Conexao.php");
include "daos/DaoUsuario.php";

session_start();;

if (isset($_POST["btnEnviaEmail"])) {

    $conexao = new Conexao();
    $con = $conexao::conecta();

    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_MAGIC_QUOTES);

    if (verificaEmail($email, $con) == $email) {

        ?>
        <script>alert("E-mail enviado com sucesso!") </script> <?php
    }

} else {
    ?>
    <script>alert("Insira um e-mail ja cadastrado no sistema!") </script> <?php
}

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
    <?php include 'navbar.php'; ?>
</div>
<div class="container">
    <form method="POST" action="">
        <center>
            <div class="form-group">
                <input type="email" name="email" placeholder="Digite seu e-mail" class="form-control"><br>
            </div>
            <input type="submit" name="btnEnviaEmail" value="Enviar" class="btn btn-success"><br><br>
        </center>
    </form>
</div>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>
