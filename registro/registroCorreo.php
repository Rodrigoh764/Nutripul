<?php
include("../nav/nav.php");
?>
<link rel="stylesheet" href="../css/registroUser.css">

<body onload="Javascript:history.go(1);" onunload="Javascript:history.go(1)">
    <h1></h1>
    <div id="formulario">

        <form action="../ValidaDatos/valiCorreo.php" method="POST">
            <h1 id="titulo">Ingrese su e-mail</h1>
            <input type="text" name="correo" id="entrada" placeholder="Correo" required><br>
            <button type="submit" id="registra">CONFIRMAR</button>
        </form>
    </div>

</body>

<?php
include("../footer/footer.php");
?>