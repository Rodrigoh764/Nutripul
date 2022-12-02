<?php
include("../nav/nav.php");
?>

<link rel="stylesheet" href="../css/registroUser.css">
<body onload="Javascript:history.go(1);" onunload="Javascript:history.go(1)">
    <h1></h1>
    <div id="formulario">
    <form action="../ValidaDatos/valiTelefono.php" method="POST">
    <h1 id="titulo">Ingresa tu número telefonico</h1>
        <div class="container">
            <input id="entrada" type="number" name="telefono" required value="55">
        </div>
       <div class="boton">
        <button type="submit"id="registra">CONTINUAR</button>
       </div>
        
    </form>
    </div>

</body>
<?php
include("../footer/footer.php");
?>
