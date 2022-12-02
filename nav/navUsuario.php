<!-- YA ESTANDO DENTRO DEL SISTEMA -->
<?php
include("../conexionbd/conexionBD.php");
$conexion = conectar();

$id_usuario = $_GET["id_usuario"];

$sql = "select * from clientes where cliente_id ='$id_usuario'";
$re = mysqli_query($conexion, $sql);
$ver = mysqli_fetch_array($re);


include("../controlador/script.php");
?>

<link rel="stylesheet" href="../css/navUser.css">

<body>
    <header>
        <a href="../vista/principalUser.php?id_usuario=<?php echo $id_usuario; ?>"><img src="../img/frutas/logoTransp1.png" id="logo"></a>
        <nav>
            <ul>
                <div id="barra">
                    <li><a href="../Carrito/Carrito.php?id_usuario=<?php echo $id_usuario; ?>"><img src="../img/Carrito/carrito.png" id="carrito"></a></li>
                    <li><a href="../Productos/MenuPulpas.php?id_usuario=<?php echo $id_usuario; ?>"> Menú </a></li>
                    <li><a href="../empresa/empresa.php?id_usuario=<?php echo $id_usuario; ?>">Empresa</a></li>
                    <!-- <li><a href="../factura/tabla.php?id_usuario=<?php echo $id_usuario; ?>">Mis Compras</a></li> -->
                    <li><a href="../MisCompras/Compras.php?id_usuario=<?php echo $id_usuario; ?>">Mis Compras</a></li>
                    <li> <a href="../ValidaDatos/Domicilio.php?id_usuario=<?php echo $ver["cliente_id"] ?>"><?php echo $ver["cliente_nombre"] ?></a> </li>
                    
                    <li class="accion"><a href="#"><ion-icon name="person-circle-outline"></ion-icon></a>
                    <div class="mostrar">
                        <a href="../ValidaDatos/llenadoDomicilio.php?id_usuario=<?php echo $id_usuario; ?>">Actualizar datos</a>
                        <a href="../eliminarCuenta/eliminarCuenta.php?id_usuario=<?php echo $id_usuario; ?>">Eliminar cuenta</a>
                        <a href="../vista/principal.php" onclick="return salir()">Cerrar sesión</a>
                    </div>
                    </li>
                    <!-- CREO QUE DEBO DE HACER UNA COPIA DE LOS PRODUCTOS PARA PODER RECIBIR EL ID DEL CLIENTE -->
                    
                    <form action="../Productos/BusquedaUsuario.php" method="GET">

                        <input type="search" placeholder="Buscar" name="busqueda"  id="buscador" >

                    </form>
                    
                </div>
            </ul>
        </nav>
    </header>
</body>



<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>