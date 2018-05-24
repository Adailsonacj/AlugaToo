<?php

function cadastraUsuario($email, $senha, $idPessoaFisica, $con)
{
    try {
        $sql = ("insert into usuario(usuario, senha, fkIdPessoa) VALUES ('{$email}','{$senha}',{$idPessoaFisica})");
        $stmt = $con->prepare($sql);
        $stmt->execute();
        Conexao::desconecta();
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function verificaEmail($email, $con)
{
    $sql = "select usuario from usuario where usuario = '{$email}'";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {

        return $email;

    }
    return null;
}

function alteraEmailUsuario($email, $idPessoaFisica, $con)
{
    try {
        $sql = ("UPDATE public.usuario SET usuario='$email' WHERE fkIdPessoa = $idPessoaFisica;
");
        $stmt = $con->prepare($sql);
        $stmt->execute();
        Conexao::desconecta();
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}