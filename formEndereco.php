<?php
include "daos/DaoEstados.php";

$estados = getEstados();

foreach ($estados as $estado) {

    print_r($estado['nome']);
}

if (isset($_POST["btnCadastraEndereco"])):

    $estado = filter_input(INPUT_POST, "Estado", FILTER_SANITIZE_MAGIC_QUOTES);

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

        <div class="dropdown">
            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">
                Selecione seu Estado
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php $estado['nome'] ?>"><?php $estado['nome'] ?></a>
            </div>
        </div>
        <br>
        <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                Selecione sua cidade
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php $estado['nome'] ?>"><?php $estado['nome'] ?></a>
            </div>
        </div>
        <br>
        <input type="text" name="bairro" placeholder="Digite Bairro" class="form-control"><br>

        <input type="text" name="logradouro" placeholder="Digite seu logradouro" class="form-control"><br>

        <input type="text" name="numero" placeholder="Seu número" class="form-control"><br>

        <input type="submit" name="btnCadastraEndereco" value="Cadastrar" class="btn btn-success"><br><br>

    </form>
</div>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>