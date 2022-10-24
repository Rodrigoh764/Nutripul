<?php
//LLENADO DE DATOS DEL DOMICILIO O ACTUALIZACION
include("../php/conexionBD.php");
$conexion = conectar();

//tomamos los datos obtenidos
$id = $_GET["id"];
$alcaldia = $_POST["alcaldia"];
$colonia = $_POST["colonia"];
$numExt = $_POST["numExterior"];
$numInt = $_POST["numInterior"];
$calle = $_POST["calle"];
$cp = $_POST["cp"];
$genero = $_POST["genero"];
$referencia = $_POST["referencia"];



$sql = "select * from domicilio where cliente_id ='$id'";
$result = mysqli_query($conexion, $sql);

if ($mostrar = mysqli_fetch_array($result)) {
    $consulta = "update domicilio set alcaldia='$alcaldia', colonia='$colonia', codigoPostal='$cp', calle='$calle', genero='$genero', referencia='$referencia', numInt='$numInt', numExt='$numExt' where cliente_id='$id'";
    $resultado = mysqli_query($conexion, $consulta);
    header("Location: http://localhost/nutripul/ValidaDatos/Domicilio.php?id=$id");


} else {
    $consulta = "INSERT INTO domicilio (cliente_id, alcaldia, colonia, codigoPostal, calle, genero, referencia, numInt, numExt) values ('$id', '$alcaldia', '$colonia', '$cp', '$calle', '$genero', '$referencia','$numInt',  '$numExt')";
    $resultado = mysqli_query($conexion, $consulta);
    header("Location: http://localhost/nutripul/ValidaDatos/Domicilio.php?id=$id ");

}


?>