<?php
    $servidor = "localhost";
    $nombreBD = "nutripulp";
    $usuario = "root";
    $contraseña = "";

    $conexion = new mysqli($servidor, $usuario, $contraseña, $nombreBD);
    
    // if ($conexion ) {
    //     echo"Si se pudo conectar";
    // }else{
    //     echo "algo fallo";
    // }
?>