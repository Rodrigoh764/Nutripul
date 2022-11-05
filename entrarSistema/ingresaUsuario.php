<!-- <link rel="stylesheet" href="../css/nav.css"> -->
<link rel="stylesheet" href="../css/registro.css">
<link rel="stylesheet" href="../css/formulario.css">




<!-- formulario -->
<div id="formulario">
    <form action="../controlador/validarUser.php" method="post">
        <h1>Ingrese su número telefonico y contraseña:</h1>
        <input type="text" name="telefono" required placeholder="Telefono" value="55">

        <input type="password" name="contraseña" required placeholder="Contraseña"><br><br><br>
        <button type="submit">ENTRAR</button>
    </form>
</div>

</body>
<?php
include("../footer/footer.php");
?>