<?php
include("../conexionbd/conexionBD.php");
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
<?php
include("../nav/nav.php");
?>

<link rel="stylesheet" href="../css/registroUsuario.css">
        
        <body  onload="Javascript:history.go(1);" onunload="Javascript:history.go(1)">
        
            <div id="formulario">
                <h1>¡NÚMERO REGISTRADO DE MANERA EXITOSA!</h1>
               <a href="../registroUsuario/registro4.php"> <button type="submit" id="registra">CONTINUAR</button></a>
            </div>
  
        </body>
        <?php
    } else {
        ?>


<?php
include("../nav/nav.php");
?>

<link rel="stylesheet" href="../css/registroUsuario.css">
    <body>
    
        <div id="formulario">
            <h1>NÚMERO NO VALIDO, VUELVA A INTENTARLO</h1>
           <a href="../registro/registroTelefono.php"> <button type="submit" id="registrar">regresar</button></a>
        </div>
    

    </body>


<?php

    }
}
validating($numero, $conexion, $valor);
