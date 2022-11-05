<?php
include("../conexionbd/conexionBD.php");
$conexion = conectar();

$contraseña1 = $_POST["contraseña1"];
$contraseña2 = $_POST["contraseña2"];

//longitud de contraseña
$cont = strlen($contraseña1);

$sql = "select MAX(cliente_id) cliente_id from clientes";
$result = mysqli_query($conexion, $sql);
$mostrar = mysqli_fetch_array($result);
$id = $mostrar["cliente_id"];

if ($contraseña1 === $contraseña2) {
    if ($cont < 8) {
        ?>

<?php
include("../nav/nav.php");
?>

<link rel="stylesheet" href="../css/registroUsuario.css">
    
    <body>
    
        <div id="formulario">
            <h1>LA CONTRASEÑA DEBE CONTENER MINIMO 8 DIGITOS, VUELVA A INTENTARLO</h1>
           <a href="../registro/registroContraseña.php"> <button type="submit" id="registra">Volver</button></a>
        </div>
    
 
    </body>


<?php
?>
        
<?php
        exit;
    }
    $consulta = "update clientes set cliente_password='$contraseña1' where cliente_id='$id'";
    $resultado = mysqli_query($conexion, $consulta);

    ?>

<?php
include("../nav/nav.php");
?>

<link rel="stylesheet" href="../css/registroUsuario.css">
    
    <body  onload="Javascript:history.go(1);" onunload="Javascript:history.go(1)">
    
        <div id="formulario">
            <h1>¡CONTRASEÑA REGISTRADA DE MANERA EXITOSA!</h1>
            <!-- agregamos el echo valor -->
           <a href="../vista/principalUser.php?id=<?php echo $id; ?> "> <button type="submit" id="registra">FINALIZAR</button></a>
        </div>
    
   
    </body>
    <?php

    // header("Location: http://localhost/nutripul/registro/contraseñaRegistrada.php");
    exit;
}
?>
<?php
include("../nav/nav.php");
?>

<link rel="stylesheet" href="../css/registroUsuario.css">
    
    <body>
    
        <div id="formulario">
            <h1>LA CONTRASEÑA NO COINCIDE, VUELVA A INTENTARLO</h1>
           <a href="../registro/registroContraseña.php"> <button type="submit" id="registra">Volver</button></a>
        </div>

    </body>


<?php

?>
