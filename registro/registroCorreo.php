<?php
include("nav.php");
?>
<link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/registro.css">
<link rel="stylesheet" href="../css/formulario.css">

<body>

    <div id="formulario">
        <h1>Ingrese su e-mail</h1>
        <form action="../php/valiCorreo.php" method="POST">
            <input type="text" name="correo" id="correo" placeholder="Correo" required><br>
            
                <button type="submit" id="registrar">REGISTRARSE</button>
          

        </form>
    </div>

    <?php
    include("footer.php");
    ?>
</body>