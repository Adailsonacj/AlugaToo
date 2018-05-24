<?php include "database/Conexao.php";
include "daos/DaoUsuario.php";
include "daos/DaoPessoaFisica.php";

$conexao = new Conexao();
$con = $conexao::conecta();


if (isset($_POST["btnCadUsuario"])):

    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_MAGIC_QUOTES);
    $senha1 = filter_input(INPUT_POST, "senha1", FILTER_SANITIZE_MAGIC_QUOTES);
    $senha2 = filter_input(INPUT_POST, "senha2", FILTER_SANITIZE_MAGIC_QUOTES);

    if ($senha1 == $senha2) {
        $idPessoaFisica = ultimaInsercaoPessoaFisica($con);
        cadastraUsuario($email, $senha1, $idPessoaFisica, $con);
        header("location:login.php");
    }

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
    <?php include 'navbar.php'; ?>
</div>
<div class="container">
    <form method="POST" action="">

        <br/>
        <input type="email" name="email" placeholder="Digite o e-mail" class="form-control"><br>

        <input type="password" name="senha1" placeholder="Digite uma senha" class="form-control"><br>

        <input type="password" name="senha2" placeholder="Digite a senha novamente" class="form-control"><br>

        <input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn btn-success"><br><br>

    </form>
</div>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>