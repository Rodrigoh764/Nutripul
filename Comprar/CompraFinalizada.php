<?php 
session_start(); 
$id_usuario = $_GET["id_usuario"]; 
include("../ConexionBDYOS/Conexion.php");
if (!isset($_SESSION['MiCarrito'])) {
    header('Location: ../Productos/MenuPulpas.php');
}
$arreglo = $_SESSION['MiCarrito'];
$subTotal = 0; //Cada producto
$total = 0; //Suma productos
$totalEnvio = 0;
srand (time()); //Numeros aleatoreos
$numero_pedido = rand(1000,10000);
for ($i = 0; $i < count($arreglo); $i++) {
    $subTotal = $arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad'];
    $total = $total + $subTotal;
    if ($total >= 595) {
        $totalEnvio = $total;
    } else {
        $totalEnvio = $total + 150;
    }
}  

//Siempre que se haga una compra
$conexion -> query("INSERT INTO ventas (id_cliente, Total, Fecha, Folio) VALUES ('$id_usuario','$totalEnvio', CURRENT_TIMESTAMP ,'$numero_pedido')") or die($conexion -> error);
$id_venta = $conexion -> insert_id;
for ($i = 0; $i < count($arreglo); $i++) {
    $conexion -> query("INSERT INTO productos_venta(id_venta, id_producto, Cantidad, Subtotal)
                        VALUES($id_venta, ".$arreglo[$i]['Id'].", ".$arreglo[$i]['Cantidad'].", ".$arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio'].")") or die($conexion -> error);
    $conexion -> query("UPDATE productos SET Existencia_L = Existencia_L -".$arreglo[$i]['Cantidad']." WHERE id = ".$arreglo[$i]['Id']) or die($conexion -> error);
}
unset($_SESSION['MiCarrito']);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../Img/Logo.png">
    <link rel="stylesheet" href="../Productos/General.css">
    <link rel="stylesheet" href="Comprar.css">
    <title>Compra Finalizada</title>
</head>
<body>
    <?php include("../nav/navUsuario.php");?>
    <h1>¡Gracias por tu compra!
    <br>
    <?php
        
    ?>
    Tu pedido <?php echo $numero_pedido ?>
    Ya Fue programado con Éxito</h1>
    <center>
        <input class="btnRegresar" onclick="window.location='../vista/principalUser.php?id_usuario=<?php echo $id_usuario; ?>'" type="submit" value="Ir a inicio" name="btnInicio">
        <a href="../factura/tabla.php?id_usuario=<?php echo $id_usuario ?>"><input class="btnRegresar"  type="submit" value="Ver Nota"></a>
    </center>
</body>
</html>