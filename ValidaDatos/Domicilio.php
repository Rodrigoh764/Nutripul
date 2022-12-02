<!-- MOSTRAMOS LOS DATOS PERSONALES, DEPENDIENDO SI YA ESTAN REGISTRADOS O NO -->
<link rel="stylesheet" href="../css/maincopy.css">
 
 <?php
   
    include("../nav/navUsuario.php");
    // include("../conexionbd/conexionBD.php");

    // $conexion = conectar();
    
    // $id_usuario = $_GET["id_usuario"];
    //consulta a la tabla clientes
    $consultaCliente = "select * from clientes where cliente_id ='$id_usuario'";
    $cliente = mysqli_query($conexion, $consultaCliente);
    $ver = mysqli_fetch_array($cliente);

    

    //consulta a tabla domicilio
    $sql = "select * from domicilio where cliente_id ='$id_usuario'";
    $re = mysqli_query($conexion, $sql);
    if ($mostrar = mysqli_fetch_array($re)) {
        //mostrar datos en tabla con domicilio ya registrado
        include("../controlador/conDomicilio.php");
    } else {
        //muestra tabla solo con datos de registro
        include("../controlador/sinDomicilio.php");
 
    }



    ?> 