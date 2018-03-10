<?php

phpinfo();

require_once 'conexao.php';


$cidade1 = array(
        'nome' => "Porto Nacional", 
        'fk_id_estado' => 27
        );

$cidade2 = array(
        'nome' => "Gurupi", 
        'fk_id_estado' => 27
        );

$cidade3 = array(
        'nome' => "Araguaina", 
        'fk_id_estado' => 27
        );

$cidades = array(
        $cidade1,
        $cidade2,
        $cidade3
        );

// Insert one by one
foreach ($cidades as $key => $user) {

    $res = pg_insert($dbconn, 'cidades' , $_POST);
    if ($res) {
      echo "Inserted user: ".$user['nome']." <br />";
    } else {
      echo pg_last_error($dbconn) . " <br />";
    }

}

// Close the connection
pg_close($dbconn);      