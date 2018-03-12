<?php
/**
 * Created by PhpStorm.
 * User: adailson
 * Date: 11/03/18
 * Time: 21:15
 */
include __DIR__ . '/../database/Conexao.php';

Class DaoEstados
{
    public function getEstados()
    {
        $conexao = new Conexao();
        $instance = $conexao::conecta();
        $sql = ("SELECT nome FROM estados");

        $stmt = $instance->prepare($sql);
        $stmt->execute();
        $array = array();
        $array[] = $stmt->fetchAll();

        var_dump($array->"nome");


        //echo implode("=",$stmt->fetch()) ;
        Conexao::desconecta();
    }
}