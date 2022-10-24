<?php
include("nav.php");
?>
<link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/registro.css">
<link rel="stylesheet" href="../css/formulario.css">
<body>

    <div id="formulario">
    <form action="../php/valiNombres.php" method="POST">
        <div class="container">
            <h1>Ingresa tus datos:</h1>
            <input type="text" name="nombre" id="nombre" required placeholder="Nombre(S)"><br>
            <input type="text" name="apellidoPa" id="nombre" required placeholder="Apellido Paterno"><br>
            <input type="text" name="apellidoMa" id="nombre" required placeholder="Apellido Materno"><br>
        </div>
       <div class="boton">
        <button type="submit">CONTINUAR</button>
       </div>
        
    </form>

    <?php
    include("footer.php");
    ?>
</div>
</body>
