<!-- YA ESTANDO DENTRO DEL SISTEMA -->
<?php
include("../conexionbd/conexionBD.php");
$conexion = conectar();

$id = $_GET["id"];

$sql = "select * from clientes where cliente_id ='$id'";
$re = mysqli_query($conexion, $sql);
$mostrar = mysqli_fetch_array($re);

include("../footer/footer.php");
include("../controlador/script.php");
?>

<link rel="stylesheet" href="../css/nav.css">

<body>
    <header>
        <a href="###"><img src="../img/frutas/logoTransp1.png" id="logo"></a>
        <nav>
            <ul>
                <div id="barra">
                    <li><a href="#"><img src="../img/Carrito/carrito.png" id="carrito"></a></li>
                    <li><a href="###"> Menú </a></li>
                    <li><a href="../empresa/empresa.php?id=<?php echo $id; ?>">Empresa</a></li>
                    <li><a href="../vista/principalUser.php?id=<?php echo $id; ?>">Home</a></li>
                    <li> <a href="../ValidaDatos/Domicilio.php?id=<?php echo $mostrar["cliente_id"] ?>"><?php echo $mostrar["cliente_nombre"] ?></a> </li>
                    
                    <li class="accion"><a href="#"><ion-icon name="person-circle-outline"></ion-icon></a>
                    <div class="mostrar">
                        <a href="../ValidaDatos/llenadoDomicilio.php?id=<?php echo $id; ?>">Actualizar datos</a>
                        <a href="../eliminarCuenta/eliminarCuenta.php?id=<?php echo $id; ?>">Eliminar cuenta</a>
                        <a href="#">Acerda de</a>
                        <a href="../vista/principal.php" onclick="return salir()">Cerrar sesión</a>
                    </div>
                    </li>
                    
                    <input type="search" value="Buscar Producto" id="buscador">
                </div>
            </ul>
        </nav>
    </header>
</body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>