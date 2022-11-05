
<?php
include("../nav/nav.php");
?>


<link rel="stylesheet" href="../css/registroUsuario.css"> 
   
<body onload="Javascript:history.go(1);" onunload="Javascript:history.go(1)">
<h1>REGISTRO</h1>    
<div id="formulario">
        <form action="../registro/registroNombres.php">
            <label>Validar e-mail</label><br><br><br>
            <label>Validar Nombre</label><button type="submit">VALIDAR</button><br><br><br>
            <label>Validad telefono</label><br><br><br>
            <label>Crear contraseña</label><br><br><br>
        </form>
    </div>
    <?php
    include("../footer/footer.php");
    ?>
</body>

