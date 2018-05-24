<?php include("./database/Conexao.php") ?>
<?php

session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
//$dao = new DaoUsuario();

$conexao = new Conexao();
$instance = $conexao::conecta();
$sql = "select * from usuario where usuario = '{$login}' AND senha = '{$senha}'";
$stmt = $instance->prepare($sql);
$stmt->execute();

Conexao::desconecta();

if ($stmt->rowCount() > 0) {

    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    while ($row = $stmt->fetch()) {
        $idPessoa = $row['fk_id_pessoa_fisica'];
    }
    $_SESSION['idPessoaFisica'] = $idPessoa;

    header("location:index.php");


    while ($row = $stmt->fetch()) {
        $endereco = $row[0];
    }


} else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header("location:login.php");
}