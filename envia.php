<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
</head>
<?php
include_once("database/Conexao.php");
if (isset($_FILES['arquivo']['name'])) {
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $nome = md5(time()) . $extensao;
    $diretorio = "foto/";

    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $nome)) {
        header("location:formCadastroFerramenta.php?imagem=$diretorio$nome");
    }
}