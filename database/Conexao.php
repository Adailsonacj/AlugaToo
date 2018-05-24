<?php

class Conexao
{
    public static $instance = null;
    private static $conexao = null;

    public static function conecta()
    {
        if (self::$instance == null):
        try {
            self::$instance = new PDO("pgsql:host=ec2-54-83-59-120.compute-1.amazonaws.com;port=5432;dbname=d9tsikvl54gvs8;user=tjcuiltmzdefau;password=6a218a910abeec9875256888d801177234dac2c9a1a68eea4536ea45cac69d1c");
        } catch (PDOException $e) {
            echo 'Erro ao conectar com DataBase: ' . $e->getMessage();
        }
        endif;
        return self::$instance;
    }

    public static function desconecta()
    {
        self::$instance = null;
    }

}
