<?php
include '../ConexionBD/Conexion.php';
$resultado = $conexion -> query("SELECT * FROM productos_venta WHERE id_venta = 1") or die ($conexion -> error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../Img/Logo.png">
    <link rel="stylesheet" href="../Productos/General.css">
    <title>Mis compras</title>
</head>
<body>
    <?php include '../Nav/Header.php' ?>
    <h1>Productos comprados</h1>
    <?php
        while ($mostrar = mysqli_fetch_array($resultado)) { 
    ?>
        <div class = "galeria" >
            <div class = "datos">
                <p><?php echo $mostrar["id_producto"]; ?></p>
                <p><?php echo ($mostrar["Cantidad"]); ?>Lts</p>
            </div>
        </div>
    <?php
        } 
    ?>
</body>
</html>