<?php
include("../conexionbd/conexionBD.php");
$conexion = conectar();

$nombre = $_POST["nombre"];
$apellidoPa = $_POST["apellidoPa"];
$apellidoMa = $_POST["apellidoMa"];

//con esto tomamos el ultimo registro
$sql = "select MAX(cliente_id) cliente_id from clientes";
$result = mysqli_query($conexion, $sql);
$mostrar = mysqli_fetch_array($result);
$numero = $mostrar["cliente_id"];


$consulta = "update clientes set cliente_nombre='$nombre', cliente_apellidoPa='$apellidoPa', cliente_apellidoMa='$apellidoMa' where cliente_id='$numero'";
$resultado = mysqli_query($conexion, $consulta);


?>

<?php
include("../nav/nav.php");
?>
    <link rel="stylesheet" href="../css/registroUsuario.css">

    
    <body  onload="Javascript:history.go(1);" onunload="Javascript:history.go(1)">
    
        <div id="formulario">
            <h1>¡SE HAN GUARDADO LOS DATOS DE MANERA EXITOSA!</h1>
           <a href="../registroUsuario/registro3.php"> <button type="submit" id="registra">CONTINUAR</button></a>
        </div>
    
    </body>