<?php
include("conexionBD.php");
$conexion = conectar();

$numero = $_POST["telefono"];

$sql = "select MAX(cliente_id) cliente_id from clientes";
$result = mysqli_query($conexion, $sql);
$mostrar = mysqli_fetch_array($result);
$valor = $mostrar["cliente_id"];



function validating($telefono, $conec, $num)
{

    if (preg_match('/(55)[ -]*([0-9][ -]*){8}$/', $telefono)) {

        $consulta = "update clientes set cliente_telefono='$telefono' where cliente_id='$num'";
        $resultado = mysqli_query($conec, $consulta);
        ?>

        <link rel="stylesheet" href="../css/nav.css">
        <link rel="stylesheet" href="../css/registro.css">
        <link rel="stylesheet" href="../css/formulario.css">
        
        <body>
        
            <div id="formulario">
                <h2>¡NÚMERO REGISTRADO DE MANERA EXITOSA!</h2>
               <a href="../registro/registro4.php"> <button type="submit" id="registrar">CONTINUAR</button></a>
            </div>
        
            <footer>
                <div id="img-botton">
                    <img src="../img/logoTransp1.png" alt="">
                </div>
            </footer>
        </body>
        <?php
    } else {
        ?>

    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/formulario.css">
    
    <body>
    
        <div id="formulario">
            <h2>NÚMERO NO VALIDO, VUELVA A INTENTARLO</h2>
           <a href="../registro/registroTelefono.php"> <button type="submit" id="registrar">Volver</button></a>
        </div>
    
        <footer>
            <div id="img-botton">
                <img src="../img/logoTransp1.png" alt="">
            </div>
        </footer>
    </body>


<?php

    }
}
validating($numero, $conexion, $valor);
