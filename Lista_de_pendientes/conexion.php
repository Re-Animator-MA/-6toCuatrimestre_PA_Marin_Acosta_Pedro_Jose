<?php
    $host = "localhost";
    $user = "root";
    $pass = "phpd474w38";
    $db   = "Quehaceres";

    $conexion = Mysqli_connect($host,$user,$pass,$db);

    if(!$conexion){
        die("Error de conexión". mysqli_connect_errno());
    }else{
        echo "Conexión exitosa";
    }
?>