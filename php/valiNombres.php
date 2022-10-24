<?php
include("conexionBD.php");
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


<link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/formulario.css">
    
    <body>
    
        <div id="formulario">
            <h2>¡SE HAN GUARDADO LOS DATOS DE MANERA EXITOSA!</h2>
           <a href="../registro/registro3.php"> <button type="submit" id="registrar">CONTINUAR</button></a>
        </div>
    
        <footer>
            <div id="img-botton">
                <img src="../img/logoTransp1.png" alt="">
            </div>
        </footer>
    </body>