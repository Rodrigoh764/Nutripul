<?php
include("nav.php");
?>
<link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/registro.css">
<link rel="stylesheet" href="../css/formulario.css">
<body>
    
    <div id="formulario">
    <form action="../php/valiTelefono.php" method="POST">
    <h1>Ingresa tu número telefonico</h1>
        <div class="container">
        
        <h1>+52</h1>
            <input type="number" name="telefono" required value="55">
        </div>
       <div class="boton">
        <button type="submit">CONTINUAR</button>
       </div>
        
    </form>
    </div>
    <?php
    include("footer.php");
    ?>
</body>
