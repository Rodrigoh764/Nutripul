<?php
include("nav.php");
?>

<link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/registro.css">

<body>
    <div id="formulario">
        <h1>REGISTRO</h1>

        <form action="registroCorreo.php">
            <div id="label">
                <label> Validar e-mail</label><button type="submit">VALIDAR</button><br><br><br>
                <label>Agregar Nombre</label><br><br><br>
                <label>Validad telefono</label><br><br><br>
                <label>Crear contraseña</label><br><br><br>

            </div>

        </form>

    </div>

    <?php
    include("footer.php");
    ?>
</body>