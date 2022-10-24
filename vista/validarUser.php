<!-- INICIAR SECION, AQUI YA CONTAMOS CON UN PASSWORD Y USUARIO -->

<link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/registro.css">
<link rel="stylesheet" href="../css/formulario.css">

<!-- barra del nav -->
<header>
    <nav>
        <ul>
            <a href="#"><img src="../img/frutas/logoTransp1.png" alt="logo"></a>
            <div id="barra">

                <li><a href="###">Mis Compras </a></li>

                <li><a href="principal.php">Inicio</a></li>
            </div>

            <input type="search" value="Buscar Producto" id="buscador">

        </ul>
    </nav>
</header>

<!-- formulario -->
<div id="formulario">
    <form action="../controlador/validarUser.php" method="post">
        <h1>Ingrese su número telefonico y contraseña:</h1>
        <input type="text" name="telefono" required placeholder="Telefono" value="55">

        <input type="password" name="contraseña" required placeholder="Contraseña"><br><br><br>
        <button type="submit">ENTRAR</button>
    </form>
</div>
<?php
include("../registro/footer.php");
?>
</body>