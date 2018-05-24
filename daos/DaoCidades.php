<?php


function selecionaCidades($idEstado, $conexao)
{
    try {
        $cidades = array();
        $sql = ("SELECT * FROM cidades WHERE fk-idEstado = $idEstado");
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        while ($cidade = $stmt->fetch()) {
            array_push($cidades, $cidade);
        }
        return $cidades;
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}