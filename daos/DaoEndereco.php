<?php

include __DIR__.'/../database/Conexao.php';

class  daoEndereco
{
    public function novoEndereco ($bairro, $numero, $longradouro, $complemento, $idCidade)
    {
        $conexao = new Conexao();
        $instance = $conexao::conecta();
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = ("insert into endereco(bairro, numero, longradouro, complemento, fk_id_cidade) VALUES ('{$bairro}',{$numero},'{$longradouro}','{$complemento}',{$idCidade})");
        $stmt = $instance->prepare($sql);
        $stmt->execute();
        Conexao::desconecta();
    }
}