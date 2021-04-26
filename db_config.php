<?php

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = 'root';
    $banco = 'db_php_angularjs_crud_pagination_scratche';

    $mysqli = new $mysqli($servidor, $usuario, $senha, $banco);

    if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

?>