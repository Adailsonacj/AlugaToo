<?php

function cadastrarPessoa($nome, $nascimento, $idEndereco, $con)
{
    try {
        $sql = ("insert into pessoa(nome, nascimento, fk_id_endereco) VALUES ('{$nome}','{$nascimento}',{$idEndereco})");
        $stmt = $con->prepare($sql);
        $stmt->execute();
        Conexao::desconecta();
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function ultimaInsercaoPessoa($con)
{
    try {
        $sql = "select max(id_pessoa) from pessoa";
        $stmt = $con->prepare($sql);
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            $pessoa = $row[0];
        }
        return $pessoa;
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}