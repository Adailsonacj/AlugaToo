<?php

class Conexao
{
    public static $instance = null;
    private static $conexao = null;

    public static function conecta()
    {
        if (self::$instance == null):
        try {
            self::$instance = new PDO("pgsql:host=localhost;port=5433;dbname=alugatoo;user=postgres;password=root");
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
