<?php

function novoEndereco($bairro, $numero, $logradouro, $idCidade, $conexao)
{
    try {
        $sql = ("insert into endereco(bairro, numero, logradouro, fk_id_cidade) VALUES ('{$bairro}',{$numero},'{$logradouro}',{$idCidade})");
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        Conexao::desconecta();
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function ultimaInsercaoEndereco($con)
{
    try {
        $sql = "select max(id_endereco) from endereco";
        $stmt = $con->prepare($sql);
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            $endereco = $row[0];
        }
        return $endereco;
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}