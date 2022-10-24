<?php
include("../conexionbd/conexionBD.php");
$conexion = conectar();
// $usuario = $_GET["usuario"];
$id = $_GET["id"];

$sql = "select * from clientes where cliente_id ='$id'";
$re = mysqli_query($conexion, $sql);
$mostrar = mysqli_fetch_array($re);
include("../registro/funciones.php");
// echo $mostrar["cliente_nombre"]
?>



<!-- VERIFICAR YA QUE SE MUESTRA UN LOGO POR DEBAJO, Y VER SI PODEMOS HACER ESTE UN SOLO COODIGO y
MANDARLO A LLAMAR -->
<link rel="stylesheet" href="../css/nav.css">

<!-- HAY UN PROBLEMA A QUI ME QEUDE 
NO AVANZA A LA PAGINA DE PERFIL -->
<body>
    <header>
        <nav>
            <ul>
                <a href=""><img src="../img/frutas/logoTransp1.png"></a>
                <div>
                    <li><a href="../registro/principal.php" onclick="return salir()">CERRAR</a></li>
                    <li><a href="#">Mis Compras</a></li>
                    <li><a href="#"><?php echo $mostrar["cliente_nombre"] ?></a></li>
                    <li> <a href="../ValidaDatos/Domicilio.php?id=<?php echo $id; ?>"><ion-icon name="person-circle-outline"></ion-icon></a> </li>
                    <div id="buscador">
                        <input type="search" value="Buscar Producto" id="buscador">
                    </div>
                </div>
            </ul>
        </nav>
    </header>
</body>

</html>