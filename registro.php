<?php

    $user="root";
    $pass="";
    $server="localhost";
    $batab="nutripul";

    $conexion = mysqli_connect($server,$user,$pass,$batab);

if($conexion){
echo "estas conectado";
}else{
    echo "No se realizo la conexion";
}
?>
