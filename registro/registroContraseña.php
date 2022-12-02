<?php
include("../nav/nav.php");
?>

<link rel="stylesheet" href="../css/registroUser.css">
<body onload="Javascript:history.go(1);" onunload="Javascript:history.go(1)">
    
<h1></h1>
    <div id="formulario">
    <form action="../ValidaDatos/valiContraseña.php" method="POST">
        <div class="container">
            <h1 id="titulo">Ingrese una contraseña</h1>
            <p>LA CONTRASEÑA DEBE SER MAYOR O IGUAL A 8 DIGITOS, PUEDE SER ALFANÚMERICO</p>
            <input id="entrada2" type="password" name="contraseña1" required placeholder="Nueva contraseña"><br>
            <!-- <h1 id="text">Repita la contraseña</h1> -->
            <input id="entrada2" type="password" name="contraseña2" required placeholder="Repita la contraseña">
        </div>
        
       <div class="boton">
        <button type="submit" id="registra3">CONTINUAR</button>
       </div>
        
    </form>
    </div>
    <?php
    include("../footer/footer.php");
    ?>
</body>
