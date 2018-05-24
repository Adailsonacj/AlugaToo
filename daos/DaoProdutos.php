<?php

function cadastrarProduto($idPessoa, $nome, $valor, $descricao, $linkImagem, $con)
{
    try {
        $sql = ("insert into produtos(nome, descricao, valor, fkIdPessoa, imagem) VALUES ('{$nome}','{$descricao}',{$valor}, {$idPessoa},'{$linkImagem}')");
        $stmt = $con->prepare($sql);
        $stmt->execute();
        Conexao::desconecta();
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function getProdutos($con)
{
    try {
        $produtos = array();
        $sql = ("SELECT * FROM produtos");
        $stmt = $con->prepare($sql);
        $stmt->execute();
        while ($produto = $stmt->fetch()) {
            array_push($produtos, $produto);
        }
        return $produtos;
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function deleteProduto($id, $con)
{
    try {
        $sql = ("DELETE FROM produtos WHERE id_produto = $id");
        $stmt = $con->prepare($sql);
        $stmt->execute();
        Conexao::desconecta();
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}

function getProdutoPessoa($idPessoa, $con)
{
    try {
        $produtos = array();
        $sql = ("SELECT * FROM produtos WHERE fk_idpessoafisica = $idPessoa");
        $stmt = $con->prepare($sql);
        $stmt->execute();

        while ($produto = $stmt->fetch()) {
            array_push($produtos, $produto);
        }
        return $produtos;
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}