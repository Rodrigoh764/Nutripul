<?php
include("../nav/nav.php");
?>


<link rel="stylesheet" href="../css/registroUsuarioMod.css"> 
   
<body onload="Javascript:history.go(1);" onunload="Javascript:history.go(1)">
<h1>REGISTRO</h1>    
<div id="formulario">
      
        <form action="../registro/registroContraseña.php">
            <label>Validar e-mail</label><br><br><br>
            <label>Agregar Nombre</label><br><br><br>
            <label>Validad telefono</label><br><br><br>
            <label>Crear contraseña</label><button type="submit">VALIDAR</button><br><br><br>
        </form>
    </div>
    <?php
    include("../footer/footer.php");
    ?>
</body>
