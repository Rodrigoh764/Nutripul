<?php
include("nav.php");
?>
<link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/registro.css">
<link rel="stylesheet" href="../css/formulario.css">
    <div id="formulario">
    <form action="../php/valiContraseña.php" method="POST">
        <div class="container">
            <h1 id="text">Ingrese una contraseña</h1>
            <p>LA CONTRASEÑA DEBE SER MAYOR O IGUAL A 8 DIGITOS, PUEDE SER ALFANÚMERICO</p>
            <input type="password" name="contraseña1" required placeholder="Nueva contraseña"><br>
            <!-- <h1 id="text">Repita la contraseña</h1> -->
            <input type="password" name="contraseña2" required placeholder="Repita la contraseña">
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
