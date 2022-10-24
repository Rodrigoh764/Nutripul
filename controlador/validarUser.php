<?php
include("../conexionbd/conexionBD.php");
$conexion = conectar();


$contraseña = $_POST["contraseña"];
$telefono = $_POST["telefono"];

$sql = "select * from clientes where cliente_telefono = '$telefono' and cliente_password = '$contraseña'";
$result = mysqli_query($conexion, $sql);

if ($mostrar = mysqli_fetch_array($result)) {
    $usuario = $mostrar["cliente_nombre"];
    $id = $mostrar["cliente_id"];
    //enviar dato a otra pagina php y nos dirigimos a otra pagina ?usuario=$usuario ?id=$id

    
    header("Location: http://localhost/nutripul/controlador/principalUser2.php?usuario=$usuario&id=$id");
} else {
?>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/formulario.css">

    <body>

        <div id="formulario">
            <h2>LOS DATOS INGRESADOS NO ESTAN REGISTRADOS AL SISTEMA</h2>
            <h2>ASEGURATE DE INGRESAR LOS DATOS CORRECTOS</h2>
            <a href="../vista/validarUser.php"> <button type="submit" id="registrar">Regresar</button></a>
        </div>

        <footer>
            <div id="img-botton">
                <img src="../img/frutas/logoTransp1.png" alt="">
            </div>
        </footer>
    </body>


<?php

}

?>