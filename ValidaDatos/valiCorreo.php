<?php

include("../conexionbd/conexionBD.php");
$conexion = conectar();

$correo = $_POST["correo"];

$con = "select cliente_nombre from clientes where cliente_correo = '$correo'";
$resul = mysqli_query($conexion,$con);
if($verificar = mysqli_fetch_array($resul)){ ?>

<?php include("../nav/nav.php"); ?>

<link rel="stylesheet" href="../css/registroValidacion.css">
    <body>

        <div id="formulario">
            <h1>EL CORREO ELECTRONICO YA ESTA REGISTRADO EN EL SISTEMA</h1>
            <h1>ASEGURATE DE INGRESAR LOS DATOS CORRECTAMENTE</h1>
            <a href="../registro/registroCorreo.php"> <button type="submit" id="registrar">Regresar</button></a>
        </div>
    </body>
    <?php include("../footer/footer.php"); ?>
        
<?php
}else{


    function validateEmail($email, $conec)
    {
      $expresion = "/^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$/";
    
      if (preg_match($expresion, $email)) {
        $consulta = "INSERT INTO clientes(cliente_correo) VALUES ('$email')";
        $resultado = mysqli_query($conec, $consulta);
        ?>
     <?php
include("../nav/nav.php");

?>
    <link rel="stylesheet" href="../css/registroExitoso.css">

        
        <body onload="Javascript:history.go(1);" onunload="Javascript:history.go(1)">
        
            <div id="formulario">
                
                <h1>¡CORREO REGISTRADO DE MANERA EXITOSA!</h1>
                
               <a href="../registroUsuario/registro2.php"> <button type="submit" id="registra">CONTINUAR</button></a>
            </div>
        
            
        </body>
        <?php include("../footer/footer.php"); ?>
        <?php
        
    
        
      } else {
        ?>
    
    <?php
include("../nav/nav.php");

?>
         <link rel="stylesheet" href="../css/registroError.css">
        <body>
        
            <div id="formulario">
                <h1>CORREO NO VALIDO, VUELVA A INTENTARLO</h1>
               <a href="../registro/registroCorreo.php"> <button type="submit" id="registra">Regresar</button></a>
            </div>
        
         
        </body>
        <?php include("../footer/footer.php"); ?>
    
    <?php
    
        
      }
    }
    validateEmail($correo, $conexion);
}


?>
