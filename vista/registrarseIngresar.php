<?php
include("../nav/navLiga.php");
?>
<!--SE OBTIENEN LOS DATOS DEL CLIENTE-->

<!-- COLOR DE FONDO, CAJA  DEL FORMULARIO-->
<link rel="stylesheet" href="../css/ingresarRegistrarse.css">

<!-- formulario -->
<div class="form">


    <div id="formulario">
        <form action="../controlador/validarUser.php" method="post">
            <h1>Ingrese su número telefonico y contraseña:</h1>
            <input id="entrada" type="text" name="telefono" required placeholder="Telefono" value="55">

            <input id="entrada" type="password" name="contraseña" required placeholder="Contraseña"><br><br><br>
            <button type="submit">ENTRAR</button>
        </form>
    </div>
    <div id="formulario1">
        <form action="../registroUsuario/registro.php" method="post">
        <h1>Crear cuenta nueva</h1>   
        
            <br><br><br>
            <button type="submit" id="btn2">REGISTRARSE</button>
        </form>
    </div>

    </div>
<?php
include("../footer/footer.php");
?>