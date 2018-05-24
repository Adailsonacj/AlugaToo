<?php include "database/Conexao.php";
include "daos/DaoProdutos.php";
include "daos/DaoUsuario.php";
include "registro.php";

$conexao = new Conexao();
$con = $conexao::conecta();

if (isset($_POST["btnCadProduto"])):
    header("location:formCadastroFerramenta.php");
endif;
if (isset($_POST["btnListaProdutos"])):
    header("location:listaMeusProdutos.php");
endif;
if (isset($_POST["btnAlteraEmail"])):

    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_MAGIC_QUOTES);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);
    if ($senha == $_SESSION['senha']) {
        alteraEmailUsuario($email, $_SESSION['idPessoaFisica'], $con);
        ?>
        <script>alert("E-mail alterado!")</script><?php
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
    <form method="POST">
        <input type="submit" name="btnCadProduto" value="ALUGAR PRODUTO" class="btn btn-success">
        <input type="submit" name="btnListaProdutos" value="Ver meus produtos" class="btn btn-danger">
    </form>
    <br/>
    <form method="POST">
        <div class="pull-right">
            <input type="button" data-toggle="modal" data-target="#modalEditaEmail" value="Alterar Email"
                   class="btn btn-warning">
        </div>
        <div class="modal fade" id="modalEditaEmail" tabindex="-1" role="dialog"
             aria-labelledby="modalEditaEmail">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center" id="modalEditaEmail">Edite seu email!</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="">
                            <input type="text" name="email" placeholder="Digite seu novo e-mail" class="form-control">
                            <br>
                            <input type="password" name="senha" placeholder="Digite sua senha" class="form-control">
                            <br/>
                            <input type="submit" name="btnAlteraEmail" value="Alterar"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>