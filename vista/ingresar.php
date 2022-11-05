<!-- IMPORTAMOS LA CABECERA Y EL FOOTER -->
<?php
include("../nav/navAsceso.php");
include("../footer/footer.php");

?>

<!--SE OBTIENEN LOS DATOS DEL CLIENTE-->

<!-- COLOR DE FONDO, CAJA  DEL FORMULARIO-->
<link rel="stylesheet" href="../css/registro.css">

<!-- formulario -->
<div id="formulario">
    <form action="../controlador/validarUser.php" method="post">
        <h1>Ingrese su número telefonico y contraseña:</h1>
        <input id="entrada" type="text" name="telefono" required placeholder="Telefono" value="55">

        <input id="entrada" type="password" name="contraseña" required placeholder="Contraseña"><br><br><br>
        <button type="submit">ENTRAR</button>
    </form>
</div>