<?php include "database/Conexao.php";
include "daos/DaoProdutos.php";
require_once('registro.php');

$conexao = new Conexao();
$con = $conexao::conecta();

if (isset($_POST["btnCadProduto"])):
    $linkImagem = $_GET['imagem'];
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_MAGIC_QUOTES);
    $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_MAGIC_QUOTES);
    $valor = filter_input(INPUT_POST, "valor", FILTER_SANITIZE_MAGIC_QUOTES);
    if (!empty($nome) || !empty($descricao) || !empty($valor)) {
        cadastrarProduto($_SESSION['idPessoaFisica'], $nome, $valor, $descricao, $linkImagem, $con);
        ?>
        <script>alert("Ferramenta cadastrada com sucesso!")</script>;<?php
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
    <form method="POST" action="http://localhost/alugatoo/envia.php" enctype="multipart/form-data">
        <div class="pull-right">
            <input type="button" data-toggle="modal" data-target="#modalUpload" value="ENVIAR FOTOS"
                   class="btn btn-success">
        </div>
        <div class="modal fade" id="modalUpload" tabindex="-1" role="dialog"
             aria-labelledby="modalUpload">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center" id="modalUpload">Envie sua imagem!</h4>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="http://localhost/alugatoo/envia.php"
                              enctype="multipart/form-data">
                            Selecione sua imagem <input name="arquivo" size="20" type="file"/>
                            <input type="submit" value="Enviar"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </form>
    <form method="POST" action="">
        <br>
        <input type="text" name="nome" placeholder="Digite o nome do produto" class="form-control">
        <br>
        <input type="text" name="descricao" placeholder="Digite uma descrição" class="form-control">
        <br>
        <input type="number" name="valor" placeholder="Digite o valor do aluguel" class="form-control">
        <br>
        <br>
        <input type="submit" name="btnCadProduto" value="ALUGAR PRODUTO" class="btn btn-success">
        <br>
    </form>
</div>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>