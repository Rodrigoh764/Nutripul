<?php
include("../conexionbd/conexionBD.php");

$conexion = conectar();
$id_usuario = $_GET["id_usuario"];

//DTOS DEL CLIENTE
$consultaCliente = "select * from clientes where cliente_id ='$id_usuario'";
$cliente = mysqli_query($conexion, $consultaCliente);
$ver = mysqli_fetch_array($cliente);



//consulta a tabla domicilio
$sql = "select * from domicilio where cliente_id ='$id_usuario'";
$re = mysqli_query($conexion, $sql);
$mostrar = mysqli_fetch_array($re);
//---------------------------------------------------

// include("../ConeBDMaster/Conexion.php");
include("../ConexionBDYOS/Conexion.php");
session_start();

//--------------------------
$nombre = "";
$precio = "";
$imagen = "";
$cantidad = "";
$stock = "";
if (isset($_SESSION['MiCarrito'])) {
    //Si existe buscamos si ya estaba agregado el producto
    if (isset($_GET['id'])) {
        $arreglo = $_SESSION['MiCarrito'];
        $encontro = false;
        $numero = 0;
        for ($i = 0; $i < count($arreglo); $i++) {
            if ($arreglo[$i]['Id'] == $_GET['id']) {
                $encontro = true;
                $numero = $i;
            }
        }
        if ($encontro == true) {
            $cantidad = $_POST["cantidad"];
            $arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad'] + $cantidad;
            $_SESSION['MiCarrito'] = $arreglo;
        } else {
            $resultado = $conexion->query('SELECT * FROM productos WHERE id = ' . $_GET['id']) or die($conexion->error);
            $mostrar = mysqli_fetch_row($resultado);
            $nombre = $mostrar[1];
            $precio = $mostrar[2];
            $imagen = $mostrar[4];
            $stock = $mostrar[3];
            $cantidad = $_POST["cantidad"];
            if ($cantidad > 0) {
                if ($cantidad <= $stock) {
                    $arregloNuevo = array(
                        'Id' => $_GET['id'],
                        'Nombre' => $nombre,
                        'Precio' => $precio,
                        'Imagen' => $imagen,
                        'Cantidad' => $cantidad,
                        'Stock' => $stock
                    );
                    array_push($arreglo, $arregloNuevo);
                    $_SESSION['MiCarrito'] = $arreglo;
                } else
                    echo "<script>alert('La cantidad deseada exede el numero de productos disponibles');</script>";
            } else
                echo "<script>alert('La cantidad debe ser mayor a 0');</script>";
        }
    }
} else {
    //Creamos la varible
    if (isset($_GET['id'])) {
        $resultado = $conexion->query('SELECT * FROM productos WHERE id = ' . $_GET['id']) or die($conexion->error);
        $mostrar = mysqli_fetch_row($resultado);
        $nombre = $mostrar[1];
        $precio = $mostrar[2];
        $imagen = $mostrar[4];
        $stock = $mostrar[3];
        $cantidad = $_POST["cantidad"];
        if ($cantidad > 0) {
            if ($cantidad <= $stock) {
                $arreglo[] = array(
                    'Id' => $_GET['id'],
                    'Nombre' => $nombre,
                    'Precio' => $precio,
                    'Imagen' => $imagen,
                    'Cantidad' => $cantidad,
                    'Stock' => $stock
                );
                $_SESSION['MiCarrito'] = $arreglo;
            } else
                echo "<script>alert('La cantidad deseada exede el numero de productos disponibles');</script>";
        } else
            echo "<script>alert('La cantidad debe ser mayor a 0');</script>";
    }
}



//---------------------------------------
date_default_timezone_set('America/Mexico_City');
$DateAndTime = date('m-d-Y ');
$Time = date(' h:i:s a', time());



?>


<link rel="stylesheet" href="../css/factura.css">
<div class="container">

    <div class="datos">
        <table class="tabla" border="1px ">
            <tr class="titulo">
                <td rowspan="4" id="logo"> <img src="../img/frutas/logoTransp1.png" id="imagenLogo"> </td>
                <td rowspan="4"><strong>FACTURA DE VENTAS</strong> <br> Somos una empresa Mexicana con más de 10 años de experiencia extrayendo <br> lo más sabroso de la fruta en pulpas mexicana. <br><br>Atención a cliente:5534569087 <br>www.nutripul.com</td>
                <td colspan="3" class="fecha"><strong>FECHA DE SOLICITUD</strong></td>
            </tr>
            <tr class="titulo">
                <td><strong>DIA</strong></td>
                <td><strong>MES</strong></td>
                <td><strong>AÑO</strong></td>
            </tr>
            <tr class="titulo">
                <td colspan="3"><?php echo $DateAndTime; ?></td>
            </tr>
            <tr class="titulo">
                <td colspan="3"><?php echo $Time; ?></td>
            </tr>
            <tr class="info">
                <td colspan="2"><strong>Cliente:</strong> <?php echo $ver["cliente_nombre"];
                                                            echo " ", $ver["cliente_apellidoPa"];
                                                            echo " ", $ver["cliente_apellidoMa"]; ?></td>
                <td colspan="3"><strong>C.P:</strong> <?php echo $mostrar["codigoPostal"] ?></td>
            </tr>
            <tr class="info">
                <td colspan="2"><strong>Direccion:</strong><?php echo $mostrar["colonia"];
                                                            echo " Num Interior ",  $mostrar["numInt"];
                                                            echo " Num Exterior ", $mostrar["numExt"];
                                                            echo "  como referencia", $mostrar["referencia"]; ?></td>
                <td colspan="3"><strong>Alcaldia:</strong> <?php echo $mostrar["alcaldia"] ?></td>
            </tr>
            <tr class="info">
                <td colspan="2"><strong>Telefono:</strong> <?php echo $ver["cliente_telefono"] ?></td>
                <td colspan="3"><strong>E-mail:</strong><?php echo $ver["cliente_correo"] ?></td>
            </tr>
            <tr class="info">
                <td colspan="2"><strong>Forma de pago:</strong> Efectivo</td>
                <td colspan="3"><strong>Folio:</strong> <?php echo $id_usuario ?></td>
            </tr>
        </table>
    </div>

    <br>


    <div class="productos">
        <table class="tabla" border="1px">
            <tr class="titulo">
                <td><strong>Producto</strong></td>
                <td><strong>Nombre</strong></td>
                <td><strong>Cant.</strong></td>
                <td><strong>Precio Unit.</strong></td>
                <td><strong>Total</strong></td>


            </tr>
            <?php
            $subTotal = 0; //Cada producto
            $total = 0; //Suma productos
            $totalEnvio = 0;
            for ($i = 0; $i < count($arreglo); $i++) {
                $subTotal = $arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad'];
                $total = $total + $subTotal;
                if ($total >= 595) {
                    $totalEnvio = $total;
                } else {
                    $totalEnvio = $total + 150;
                }
            ?>
                <tr>
                    <td>1050</td>
                    <td><?php echo  $arregloCarrito[$i]['Nombre']; ?></td>
                    <td><?php echo $b = $arreglo[$i]['Cantidad']; ?> Kg</td>
                    <td>$<?php echo $a = number_format($arreglo[$i]['Precio'], 2, '.', ''); ?></td>
                    <td> <?php echo $res = $a * $b; ?> </td>



                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <br>


    <div class="total">
        <table class="tabla" border="1px">
            <tr class="titulo">


                <td><strong>Iva</strong></td>
                <!-- <td><strong>Cant. Kg</strong></td> -->
                <td><strong>Total a pagar</strong></td>
            </tr>
            <tr>

                <td> <?php
                        if ($total >= 595) {
                            echo ("Envio gratis");
                        } else {
                            echo ("$150.00");
                        }
                        ?>

                </td>
                <!-- <td></td> -->
                <td>$<?php echo number_format($totalEnvio, 2, '.', ''); ?></td>
            </tr>

        </table>
    </div>




    <div class="firma">
        <table class="tabla" border="1px" id="firma">
            <tr class="final">
                <td colspan="7"><strong>Observaciones</strong></td>
                <td colspan="7"><strong>Firma de recibido</strong></td>
            </tr>

            <tr>
                <td id="obs" rowspan="4" colspan="7"></td>
                <td id="fir" rowspan="4" colspan="7"></td>
            </tr>

        </table>
    </div>
</div>