<?php

    $servidor = 'localhost';
    $usuario = 'root';
    $senha = 'root';
    $banco = 'db_php_angularjs_crud_pagination_scratche';

    $mysqli = new $mysqli($servidor, $usuario, $senha, $banco);

    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

?>