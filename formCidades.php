<?php include "database/Conexao.php";
include "daos/DaoCidades.php";

$conexao = new Conexao();
$con = $conexao::conecta();

$idEstado = $_POST['estado'];

print_r($idEstado);
$cidades = selecionaCidades($idEstado, $con)

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
    <form method="GET" action="formCadastroEndereco.php">
        <center>
            <div class="form-group">
                <select name="cidade" class="custom-select">
                    <?php foreach ($cidades as $cidade) { ?>
                        <option value="<?= $cidade['idCidade'] ?>"><?= $cidade['nome'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" name="btnCadastraEndereco" value="Cadastrar" class="btn btn-success"><br><br>
        </center>
    </form>
</div>
<div id="rodape">
    <?php include "rodape.php"; ?>
</div>
</body>
</html>