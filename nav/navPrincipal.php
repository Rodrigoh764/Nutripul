<!-- INICIO SIN INICIAR SECCION -->
<link rel="stylesheet" href="../css/nav.css">

<body>
    <header>
        <a href="../vista/principal.php"><img src="../img/frutas/logoTransp1.png" id="logo"></a>
        <nav>
            <ul>
                <div id="barra">
                    <li><a href="../vista/ingresar.php">Iniciar Seccion</a></li>
                    <li><a href="../registroUsuario/registro.php">Crear Cuenta</a></li>
                    <li><a href="../Productos/MenuSinSession.php"> Menú </a></li>
                    <!-- <li><a href=""><img src="../img/Carrito/carrito.png" id="carrito"></a></li> -->
                    <!-- <input type="search" value="Buscar Producto" id="buscador"> -->
                    <form action="../Productos/Busqueda.php" method="GET">
                        <input type="search" placeholder="Buscar" name="busqueda" id="buscador">
                    </form>
                </div>
            </ul>
        </nav>
    </header>
</body>