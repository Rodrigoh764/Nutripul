

<?php
  include("../nav/navUsuario.php");


$id = $_GET["id"];
$conexion = conectar();

//consulta a la tabla clientes
$consultaDomicilio = "select * from domicilio where cliente_id ='$id'";
$domicilio = mysqli_query($conexion, $consultaDomicilio);


$consultaCliente = "select * from clientes where cliente_id ='$id'";
$cliente = mysqli_query($conexion, $consultaCliente);
$res = mysqli_fetch_array($cliente);



if ($ver = mysqli_fetch_array($domicilio)) {
    include("../controlador/actDomicilioCon.php");
} else {
   
    include("../controlador/actDomicilioSin.php");
}

?>