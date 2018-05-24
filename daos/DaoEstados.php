<?php
/**
 * Created by PhpStorm.
 * User: adailson
 * Date: 11/03/18
 * Time: 21:15
 */
function getEstados($conexao)
{
    try {
        $estados = array();
        $sql = ("SELECT * FROM estados");
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        while ($estado = $stmt->fetch()) {
            array_push($estados, $estado);
        }
        return $estados;
    } catch (PDOException $exception) {
        die($exception->getMessage());
    }
}
