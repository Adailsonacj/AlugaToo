<?php

include __DIR__.'/../database/Conexao.php';

Class daoCidades
{

    public function deleteCidade($nome, $estado)
    {
        $conexao = new Conexao();
        $instance = $conexao::conecta();
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = ("DELETE FROM cidades WHERE nome AND fk_id_estado VALUES ('{$nome}',{$estado})");
        $stmt = $instance->prepare($sql);
        $stmt->execute();
        Conexao::desconecta();
    }

    public function adicionaCidade($nome, $idEstado)
    {
        $conexao = new Conexao();
        $instance = $conexao::conecta();
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = ("INSERT INTO cidades(nome, fk_id_estado) VALUES ('{$nome}',{$idEstado})");
        $stmt = $instance->prepare($sql);
        $stmt->execute();
        Conexao::desconecta();
    }
}