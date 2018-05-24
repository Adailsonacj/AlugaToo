<?php include "database/Conexao.php";
include "daos/DaoEndereco.php";

$conexao = new Conexao();
$con = $conexao::conecta();
$idCidade = $_GET['cidade'];

if (isset($_POST["btnCadastraEndereco"])):
    $erro = false;
    $bairro = filter_input(INPUT_POST, "bairro", FILTER_SANITIZE_MAGIC_QUOTES);
    $logradouro = filter_input(INPUT_POST, "logradouro", FILTER_SANITIZE_MAGIC_QUOTES);
    $numero = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_MAGIC_QUOTES);
    if (!empty($bairro) || !empty($logradouro) || !empty($numero)) {
        novoEndereco($bairro, $numero, $logradouro, $idCidade, $con);
        header("location:formCadastroPessoa.php");
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
        <center>
            <input type="text" name="bairro" placeholder="Digite Bairro" class="form-control"><br>

            <input type="text" name="logradouro" placeholder="Digite seu logradouro" class="form-control"><br>

            <input type="text" name="numero" placeholder="Seu número" class="form-control"><br>

            <input type="submit" name="btnCadastraEndereco" value="Cadastrar" class="btn btn-success"><br><br>
        </center>
    </form>
</div>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>