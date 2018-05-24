<?php include "database/Conexao.php";
include "daos/DaoEndereco.php";
include "daos/DaoPessoa.php";
include "daos/DaoPessoaFisica.php";

$conexao = new Conexao();
$con = $conexao::conecta();


if (isset($_POST["btnCadPessoa"])):

    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_MAGIC_QUOTES);
    $nascimento = filter_input(INPUT_POST, "nascimento", FILTER_SANITIZE_MAGIC_QUOTES);
    $cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_MAGIC_QUOTES);
    $rg = filter_input(INPUT_POST, "rg", FILTER_SANITIZE_MAGIC_QUOTES);

    $idEndereco = ultimaInsercaoEndereco($con);
    if (!empty($nome) || !empty($nascimento) || !empty($cpf) || !empty($rg)) {
        cadastrarPessoa($nome, $nascimento, $idEndereco, $con);
        $recuperaIdPessoa = ultimaInsercaoPessoa($con);
        cadastraPessoaFisica($cpf, $rg, $recuperaIdPessoa, $con);

        header("location:formCadastroUsuario.php");
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

        <input type="text" name="nome" placeholder="Digite seu nome completo" class="form-control"><br>

        <input type="date" name="nascimento" placeholder="Digite o sua data de nascimento" class="form-control"><br>

        <input type="number" name="cpf" placeholder="Digite o seu CPF" class="form-control"><br>

        <input type="number" name="rg" placeholder="Digite o seu RG" class="form-control"><br>

        <input type="submit" name="btnCadPessoa" value="Próximo e ultimo passo" class="btn btn-success"><br><br>

        <div class="row text-center" style="margin-top: 20px;">
            Lembrou? <a href="login.php">Clique aqui</a> para logar
        </div>
    </form>
</div>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>