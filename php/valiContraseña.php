<?php
include("conexionBD.php");
$conexion = conectar();

$contraseña1 = $_POST["contraseña1"];
$contraseña2 = $_POST["contraseña2"];

//longitud de contraseña
$cont = strlen($contraseña1);

$sql = "select MAX(cliente_id) cliente_id from clientes";
$result = mysqli_query($conexion, $sql);
$mostrar = mysqli_fetch_array($result);
$valor = $mostrar["cliente_id"];

if ($contraseña1 === $contraseña2) {
    if ($cont < 8) {
        ?>

    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/formulario.css">
    
    <body>
    
        <div id="formulario">
            <h2>LA CONTRASEÑA DEBE CONTENER MINIMO 8 DIGITOS, VUELVA A INTENTARLO</h2>
           <a href="../registro/registroContraseña.php"> <button type="submit" id="registrar">Volver</button></a>
        </div>
    
        <footer>
            <div id="img-botton">
                <img src="../img/logoTransp1.png" alt="">
            </div>
        </footer>
    </body>


<?php
?>
        
<?php
        exit;
    }
    $consulta = "update clientes set cliente_password='$contraseña1' where cliente_id='$valor'";
    $resultado = mysqli_query($conexion, $consulta);

    ?>

    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/formulario.css">
    
    <body>
    
        <div id="formulario">
            <h2>¡CONTRASEÑA REGISTRADA DE MANERA EXITOSA!</h2>
           <a href="../php/principalUser.php"> <button type="submit" id="registrar">FINALIZAR REGISTRO</button></a>
        </div>
    
        <footer>
            <div id="img-botton">
                <img src="../img/logoTransp1.png" alt="">
            </div>
        </footer>
    </body>
    <?php

    // header("Location: http://localhost/nutripul/registro/contraseñaRegistrada.php");
    exit;
}
?>

    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/formulario.css">
    
    <body>
    
        <div id="formulario">
            <h2>LA CONTRASEÑA NO COINCIDE, VUELVA A INTENTARLO</h2>
           <a href="../registro/registroContraseña.php"> <button type="submit" id="registrar">Volver</button></a>
        </div>
    
        <footer>
            <div id="img-botton">
                <img src="../img/logoTransp1.png" alt="">
            </div>
        </footer>
    </body>


<?php

?>
