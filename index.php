<?php include "daos/DaoProdutos.php";
include "database/Conexao.php";

$conexao = new Conexao();
$con = $conexao::conecta();

$produtos = getProdutos($con);

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
<div class="container">
    <div id="navbar">
        <?php include 'navbar.php'; ?>
    </div>
    <!-- Aqui começa o conteudo -->
    <div class="row">
        <?php foreach ($produtos as $produto) { ?>
            <div class="col-md-4 col-md-pull-7">
                <img src=<?= $produto['imagem']?> width="400" height="400"/>
            </div>
            <div class="col-md-8">
                <h2><a href="#"><?= $produto['nome'] ?></a></h2>
                <p>
                    <?= $produto['descricao'] ?>
                </p>
                <h5>Alugue já por apenas: <?= $produto['valor'] ?>R$ por hora que usar!</h5>
            </div>
        <?php } ?>
    </div><!-- div row conteudo -->
    <div id="rodape">
        <?php include "rodape.php"; ?>
    </div>
</div>
</body>
</html>