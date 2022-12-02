<?php
include("../nav/navLiga.php");

//LOS DATOS RECIVIDOS AQUI VIENEN DEL FORMULARIO TELEFONO Y CONTRASEÑA

include("../conexionbd/conexionBD.php");
$conexion = conectar();

$contraseña = $_POST["contraseña"];
$telefono = $_POST["telefono"];

$sql = "select * from clientes where cliente_telefono = '$telefono' and cliente_password = '$contraseña'";
$result = mysqli_query($conexion, $sql);

if ($mostrar = mysqli_fetch_array($result)) {
    $usuario = $mostrar["cliente_nombre"];
    $id_usuario = $mostrar["cliente_id"];//cambie esto
    //enviar dato a otra pagina php y nos dirigimos a otra pagina ?usuario=$usuario ?id=$id

    
    header("Location: http://localhost/nutripul/vista/principalUser.php?usuario=$usuario&id_usuario=$id_usuario");
} else {
?>
  <link rel="stylesheet" href="../css/registroError.css">
    <body>
        <div id="formulario">
            <h1>LOS DATOS INGRESADOS NO ESTAN REGISTRADOS EN EL SISTEMA <br>ASEGURATE DE INGRESAR LOS DATOS CORRECTAMENTE</h1>
            <!-- <h1></h1> -->
            <a href="../vista/registrarseIngresar.php"> <button type="submit" id="registrar">Regresar</button></a>
        </div>
    </body>
   
<?php

}

include("../footer/footer.php"); 
?>