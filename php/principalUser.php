<?php

include("conexionBD.php");
$conexion = conectar();


$sql = "select MAX(cliente_id) cliente_id from clientes";
$result = mysqli_query($conexion, $sql);

$mostrar = mysqli_fetch_array($result);

$numero = $mostrar["cliente_id"];

$sql = "select cliente_nombre from clientes where cliente_id='$numero'";
$result = mysqli_query($conexion, $sql);
$mostrar = mysqli_fetch_array($result);

include("../registro/funciones.php");
?>



<link rel="stylesheet" href="../css/nav.css">

<body>
    <header>
        <nav>
            <ul>
                <a href="#"><img src="../img/logoTransp1.png" alt="logo"></a>
                <div id="barra">
                    <li><a href="../registro/principal.php" onclick="return salir()">CERRAR</a></li>
                    <li><a href="#">Mis Compras</a></li>
                    <li><a href="registro.php"><?php echo $mostrar["cliente_nombre"] ?></a></li>
                    <li> <a href="../ValidaDatos/Domicilio.php?id=<?php echo $id; ?>"><ion-icon  name="person-circle-outline"></ion-icon></a> </li>
                    <div id="buscador">
                        <input type="search" value="Buscar Producto" id="buscador">
                    </div>
                </div>

            </ul>
        </nav>
    </header>
</body>

</html>


