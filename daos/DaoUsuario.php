<?php

Class DaoUsuario
{
    public function getUsuario($email, $senha)
    {
        $conexao = new Conexao();
        $instance = $conexao::conecta();
        echo $sql = "select * from usuario where email = '{$login}' AND senha = '{$senha}'";
        $stmt = $instance->prepare($sql);
        $stmt->execute();

        Conexao::desconecta();
        return $stmt;
    }
}