<?php
include("../nav/navAsceso.php");
include("../footer/footer.php");
//LOS DATOS RECIVIDOS AQUI VIENEN DEL FORMULARIO TELEFONO Y CONTRASEÑA

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

    
    header("Location: http://localhost/nutripul/vista/principalUser.php?usuario=$usuario&id=$id");
} else {
?>
  <link rel="stylesheet" href="../css/registro.css">
    <body>
        <div id="formulario">
            <h1>LOS DATOS INGRESADOS NO ESTAN REGISTRADOS EN EL SISTEMA</h1>
            <h1>ASEGURATE DE INGRESAR LOS DATOS CORRECTAMENTE</h1>
            <a href="../vista/ingresar.php"> <button type="submit" id="registrar">Regresar</button></a>
        </div>
    </body>

<?php

}

?>