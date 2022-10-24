<?php
include("php/conexionBD.php");
$conexion = conectar();
$id=28;

$sql = "select * from domicilio where cliente_id ='$id'";
$result = mysqli_query($conexion, $sql);

if($mostrar = mysqli_fetch_array($result)){
    echo "ya esta registrado";
}else{
    echo "aun no esta en el sistema";
}


?>


