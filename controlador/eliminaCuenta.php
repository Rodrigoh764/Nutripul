<?php
include("../conexionbd/conexionBD.php");
$conexion = conectar();
$codigo = $_GET["codigo"];
$verificacion = $_POST["verificacion"];
$id_usuario = $_GET["id_usuario"];
if ($codigo == $verificacion) {
    $consulta = "delete from clientes where cliente_id='$id_usuario'";
    $result = mysqli_query($conexion, $consulta);

?>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/eliminarDatos.css">

    <header>
        <a href="###"><img src="../img/frutas/logoTransp1.png" id="logo"></a>
    </header>


    <div id="confirmar">
        <h1 id="titulo">¡Cuenta eliminada!</h1>
        <a href="../vista/principal.php"><button id="registra4">Continuar</button></a>
    </div>

 <?php include("../footer/footer.php"); ?>



<?php


} else {?>
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/eliminarDatos.css">

    <header>
        <a href="###"><img src="../img/frutas/logoTransp1.png" id="logo"></a>
    </header>


    <div id="confirmar">
        <h1 id="titulo">Codigo de verificación incorrecto, Vuelva a intentarlo</h1>
        <a href="../eliminarCuenta/eliminarCuenta.php?id_usuario=<?php echo $id_usuario ?>"><button id="registra4">Regresar</button></a>
    </div>
    <?php include("../footer/footer.php"); ?>
<?php }

?> 