<?php
// SIN INICIAR SECION
include("../ConexionBDYOS/Conexion.php");
$resultado = $conexion->query("SELECT * FROM productos WHERE id <= 4 ORDER BY id DESC") or die($conexion->error);
?>

<!DOCTYPE html>

<head>
    <link rel="icon" href="../img/frutas/logoTransp1.png">
    <link rel="stylesheet" href="../Productos/General.css">
    <link rel="stylesheet" href="../NutripulpParteYoss/SliderImg/Slider.css">
    <link rel="stylesheet" href="../Productos/MenuPulpas.css">
    <title>Nutripul</title>
</head>

<body>

    <div class="slider">
        <ul>
            <li><img src="../NutripulpParteYoss/SliderImg/Slider1.jpg"></li>
            <li><img src="../NutripulpParteYoss/SliderImg/Slider2.jpg"></li>
            <li><img src="../NutripulpParteYoss/SliderImg/Slider3.jpg"></li>
            <li><img src="../NutripulpParteYoss/SliderImg/Slider4.jpg"></li>
        </ul>
    </div>

    <h1>Productos</h1>
    
    <?php
    while ($mostrar = mysqli_fetch_array($resultado)) {
    ?>
        <div class="productos">
            <div class="galeria">
                <div class="foto">
                    <img width="130px" height="90px" src="data:image/png;base64,<?php echo base64_encode($mostrar["Imagen"]); ?>">
                </div>
                <div class="datos">
                    <p id="nombre">1Lt <?php echo $mostrar["Nombre"]; ?></p>
                    <p id="precio">$<?php echo number_format($mostrar["Precio"], 2, '.', ''); ?>
                    <p><br>
                    <!-- SE AGREGO EL ?ID=1 PARA QUE PUDIERA IR A LA PAGINA ASIGNADA -->
                    <form class="boton1" action="../Productos/VistaProductoSin.php?id=1" method="POST" enctype="multipart/form-data">
                        <input class="boton" type="submit" value="Ver producto" name="btnVer">
                    </form>
                </div>
            </div>
        <?php
    }
        ?>
        </div>
    
</body>

</html>

<?php

include("../NutripulpParteYoss/Footer/Footer.php");
?>