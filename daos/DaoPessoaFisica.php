<?php

function cadastraPessoaFisica($cpf, $rg, $idpessoa, $con)
{
    try {
        echo $sql = ("insert into pessoa_fisica(cpf, rg, fk_id_pessoa) VALUES ({$cpf},{$rg},{$idpessoa})");
        $stmt = $con->prepare($sql);
        $stmt->execute();
        Conexao::desconecta();
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function ultimaInsercaoPessoaFisica($con)
{
    try {
        $sql = "select max(id_pessoa_fisica) from pessoa_fisica";
        $stmt = $con->prepare($sql);
        $stmt->execute();

        while ($row = $stmt->fetch()) {
            $pessoaFisica = $row[0];
        }
        return $pessoaFisica;
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}