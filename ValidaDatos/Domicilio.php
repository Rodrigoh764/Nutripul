<!-- MOSTRAMOS LOS DATOS PERSONALES, DEPENDIENDO SI YA ESTAN REGISTRADOS O NO -->
<link rel="stylesheet" href="../css/main.css">
 
 <?php
   
    include("../nav/navUsuario.php");

    //consulta a la tabla clientes
    $consultaCliente = "select * from clientes where cliente_id ='$id'";
    $cliente = mysqli_query($conexion, $consultaCliente);
    $ver = mysqli_fetch_array($cliente);

    

    //consulta a tabla domicilio
    $sql = "select * from domicilio where cliente_id ='$id'";
    $re = mysqli_query($conexion, $sql);
    if ($mostrar = mysqli_fetch_array($re)) {
        //mostrar datos en tabla con domicilio ya registrado
        include("../controlador/conDomicilio.php");
    } else {
        //muestra tabla solo con datos de registro
        include("../controlador/sinDomicilio.php");
 
    }



    ?> 