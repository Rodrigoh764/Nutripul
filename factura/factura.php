<?php

ob_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota</title>
</head>
<body>
<?php
include("../ConeBDMaster/Conexion.php");


$id_usuario = $_GET["id_usuario"];


//con esto tomamos el ultimo registro del Folio pedido
$sql = " select MAX(id) id from ventas";
$result = mysqli_query($conexion, $sql);
$mostrar = mysqli_fetch_array($result);

$numero_pedido = $mostrar["id"]; //ID DE VENTAS

//CONSULTA LOS DATOS DEL CLIENTE
$sql1 = "select * from clientes where cliente_id = '$id_usuario'";
$result = mysqli_query($conexion, $sql1);
$ver = mysqli_fetch_array($result);

//CONSULTA EL DOMICILIO
$sql2 = "select * from domicilio where cliente_id = '$id_usuario'";
$result = mysqli_query($conexion, $sql2);
$mostrar = mysqli_fetch_array($result);


//CONSULTA DE VENTAS
$sql3 =  "select * from ventas where id = '$numero_pedido'";
$result = mysqli_query($conexion, $sql3);
$ventas = mysqli_fetch_array($result);


//CONSULTA productos_ventas
$sql4 = "select * from productos_venta where id_venta = '$numero_pedido'";
$re = mysqli_query($conexion, $sql4);

//---------------------------------------

$sql5 = "select * from ventas WHERE id = '$numero_pedido' ";
$resul5 = mysqli_query($conexion, $sql5);
$mos = mysqli_fetch_array($resul5);
$total = $mos["Total"];

//---------------------------------------

$sql6 = "SELECT * FROM productos_venta AS a 
INNER JOIN productos AS b ON a.id_producto = b.id
WHERE id_venta = '$numero_pedido'";
$resul6 = mysqli_query($conexion, $sql6);
// $pro = mysqli_fetch_array($resul6);



date_default_timezone_set('America/Mexico_City');
$DateAndTime = date('d-m-Y ');
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
                <td colspan="3"> <?php echo $ventas["Fecha"] ?> </td>
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
               
                <td colspan="3"><strong>Folio:</strong> <?php echo $ventas["Folio"]; ?></td>
            </tr>
        </table>
    </div>

    <br>


    <div class="productos">
        <table class="tabla" border="1px">
            <tr class="titulo">
                <td><strong>ID_Producto</strong></td>
                <td><strong>Nombre</strong></td>
                <td><strong>Cant.</strong></td>
                <td><strong>Precio Unit.</strong></td>
                <td><strong>SubTotal</strong></td>
            </tr>
            
                <tr>

                <?php while($productos=mysqli_fetch_assoc($resul6)){ ?>


                    <td><?php echo $productos["id_producto"] ?> </td>

                    <td><?php echo $productos["Nombre"] ?></td>

                    <td><?php echo $productos["Cantidad"] ?></td>
                    
                    <td> <?php echo $productos["Precio"] ?></td>

                    <td> <?php echo $productos["Subtotal"]?> </td>


                </tr>
                    
                <?php } ?>


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

                <td> 
                     <?php
                        if ($total >= 595) {
                            echo ("Envio gratis");
                        } else {
                            echo ("$150.00");
                        }
                        ?> 

                </td>

                

                <td>$ <?php echo  $total; ?> </td>
           
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
</body>
</html>

<?php 
$html=ob_get_clean();

require_once '../dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);
$dompdf->loadHtml($html);

$dompdf->setPaper('letter');
$dompdf->render();

$dompdf->stream("factura.pdf", array("Attachment" => true));
?>