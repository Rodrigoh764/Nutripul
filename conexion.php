<?php
    $user="root";
    $pass="";
    $server="localhost";
    $batab="nutripul";
    $conexion = mysqli_connect($server,$user,$pass,$batab);

    $nombre = $_POST["nombre"];
    $apellidoPa = $_POST["apellidoPa"];
    $apellidoMa = $_POST["apellidoMa"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $contra = $_POST["contra"];

$consulta = "INSERT INTO clientes(cliente_nombre, cliente_apellidoPa, cliente_apellidoMa, cliente_telefono, cliente_correo, cliente_password) 
VALUES ('$nombre','$apellidoPa','$apellidoMa','$telefono','$correo','$contra')";
$resultado = mysqli_query($conexion,$consulta);

?>
<a href="registro.html">REGISTRO CORRECTO</a>

<!--  

-->