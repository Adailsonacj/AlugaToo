<?php include "database/Conexao.php" ;
include "daos/DaoEstados.php";

$conexao = new Conexao();
$con = $conexao::conecta();

$estados = getEstados($con);

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
    <form method="POST" action="formCidades.php">
        <center>
            <div class="form-group">
                <select name="estado" class="custom-select">
                    <?php foreach ($estados as $estado) { ?>
                        <option value="<?= $estado['id'] ?>"><?= $estado['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" name="btnEnviaEstado" value="Selecione sua Cidade" class="btn btn-success"><br><br>
        </center>
    </form>
</div>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>