<?php
/**
 * Created by PhpStorm.
 * User: adailson
 * Date: 11/03/18
 * Time: 21:15
 */
include __DIR__ . '/../database/Conexao.php';


function getEstados()
{
    $estados = array();
    $conexao = new Conexao();
    $instance = $conexao::conecta();
    $sql = ("SELECT * FROM estados");
    $stmt = $instance->prepare($sql);
    $stmt->execute();
    while ($estado = $stmt->fetch()) {
        array_push($estados, $estado);
    }
    return $estados;
}
