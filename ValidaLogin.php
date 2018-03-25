<?php include("./database/Conexao.php") ?>
<?php

session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
//$dao = new DaoUsuario();

$conexao = new Conexao();
$instance = $conexao::conecta();
echo $sql = "select * from usuario where email = '{$login}' AND senha = '{$senha}'";
$stmt = $instance->prepare($sql);
$stmt->execute();

Conexao::desconecta();

if ($stmt->rowCount() > 0) {
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header("location:index.php");
} else {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header("location:login.php");
}