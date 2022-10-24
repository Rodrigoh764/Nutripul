<?php

include("conexionBD.php");
$conexion = conectar();

$correo = $_POST["correo"];

function validateEmail($email, $conec)
{
  $expresion = "/^[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$/";

  if (preg_match($expresion, $email)) {
    $consulta = "INSERT INTO clientes(cliente_correo) 
     VALUES ('$email')";
    $resultado = mysqli_query($conec, $consulta);
    ?>

    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/formulario.css">
    
    <body>
    
        <div id="formulario">
            <h2>¡CORREO REGISTRADO DE MANERA EXITOSA!</h2>
           <a href="../registro/registro2.php"> <button type="submit" id="registrar">CONTINUAR</button></a>
        </div>
    
        <footer>
            <div id="img-botton">
                <img src="../img/logoTransp1.png" alt="">
            </div>
        </footer>
    </body>
    <?php
    

    exit;
  } else {
    ?>

    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/formulario.css">
    
    <body>
    
        <div id="formulario">
            <h2>CORREO NO VALIDO, VUELVA A INTENTARLO</h2>
           <a href="../registro/registroCorreo.php"> <button type="submit" id="registrar">Volver</button></a>
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
validateEmail($correo, $conexion);

?>
