<?php
include("../nav/nav.php");
?>


<link rel="stylesheet" href="../css/registroUsuario.css"> 

<body onload="Javascript:history.go(1);" onunload="Javascript:history.go(1);">
<h1>REGISTRO</h1>    
<div id="formulario">
        <form action="../registro/registroCorreo.php">
            <div id="label">
                <label> Validar e-mail</label><button type="submit">VALIDAR</button><br><br><br>
                <label>Agregar Nombre</label><br><br><br>
                <label>Validad telefono</label><br><br><br>
                <label>Crear contraseña</label><br><br><br>
            </div>

        </form>

    </div>

</body>