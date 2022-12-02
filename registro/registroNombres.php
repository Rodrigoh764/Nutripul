<?php
include("../nav/nav.php");
?>

<link rel="stylesheet" href="../css/registroUser.css">
<body onload="Javascript:history.go(1);" onunload="Javascript:history.go(1)">
<h1></h1>
    <div id="formulario">
    <form action="../ValidaDatos/valiNombres.php" method="POST">
        <div class="container">
            <h1 id="titulo">Ingresa tus datos:</h1>
            <input id="entrada2" type="text" name="nombre" id="nombre" required placeholder="Nombre(S)"><br>
            <input id="entrada2" type="text" name="apellidoPa" id="nombre" required placeholder="Apellido Paterno"><br>
            <input id="entrada2" type="text" name="apellidoMa" id="nombre" required placeholder="Apellido Materno"><br>
        </div>
       <div class="boton">
        <button type="submit" id="registra3">CONTINUAR</button>
       </div>
        
    </form>

</div>
</body>

<?php
include("../footer/footer.php");
?>
