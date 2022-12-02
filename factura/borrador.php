<?php
$nombreImagen = "../img/frutas/logoTransp1.png";
$imagenBase64 = "data:image/png;base64," . base64_encode(file_get_contents($nombreImagen));
?>

<link rel="stylesheet" href="../css/factura.css">
<div class="container">

    <div class="datos">
        <table class="tabla"  border="1px ">
            <tr class="titulo">
                <td rowspan="4" id="logo"> <img src="<?php echo $imagenBase64 ?>" id="imagenLogo"> </td>
                <td rowspan="4"><strong>FACTURA DE VENTA</strong> <br> Somos una empresa Mexicana con más de 10 años de experiencia extrayendo <br> lo más sabroso de la fruta en pulpas mexicana. <br><br>Atención a cliente:5534569087 <br>www.nutripul.com</td>
                <td colspan="3" class="fecha"><strong>FECHA DE SOLICITUD</strong></td>
            </tr>
            <tr class="titulo">
                <td><strong>DIA</strong></td>
                <td><strong>MES</strong></td>
                <td><strong>AÑO</strong></td>
            </tr>
            <tr class="titulo">
                <td colspan="3">30-05-2022</td>
            </tr>
            <tr class="titulo">
                <td colspan="3">11:27:30 AM</td>
            </tr>
            <tr class="info">
                <td colspan="2"><strong>Cliente:</strong> Rodrigo Alfonso Hernández Hernández</td>
                <td colspan="3"><strong>C.P:</strong> 16500</td>
            </tr>
            <tr class="info">
                <td colspan="2"><strong>Direccion:</strong>  Calle Zacapa Número 13 Col. Xicalhuacan</td>
                <td colspan="3"><strong>Alcaldia:</strong> Xochimilco</td>
            </tr>
            <tr class="info">
                <td colspan="2"><strong>Telefono:</strong> 5564678927</td>
                <td colspan="3"><strong>E-mail:</strong> rodrigoh764@gmail.com</td>
            </tr>
            <tr class="info">
                <td colspan="2"><strong>Forma de pago:</strong> Efectivo</td>
                <td colspan="3"><strong>Folio:</strong> 12500</td>
            </tr>
        </table>
    </div>

    <div class="productos">
        <table class="tabla" border="1px" >
            <tr class="titulo">
                <td><strong>Producto</strong></td>
                <td><strong>Nombre</strong></td>
                <td><strong>Cant.</strong></td>
                <td><strong>Precio Unit.</strong></td>
                <td><strong>SubTotal</strong></td>
                <td><strong>Desc</strong></td>
                <td><strong>Iva</strong></td>
                <td><strong>Total</strong></td>
            </tr>
            <tr>
                <td>1050</td>
                <td>Fresa</td>
                <td>2 Kg</td>
                <td>22.80</td>
                <td>45.60</td>
                <td>0</td>
                <td>2.15</td>
                <td>$ 47.75</td>
            </tr>
            <tr>
                <td>1150</td>
                <td>Mango</td>
                <td>1 Kg</td>
                <td>20.50</td>
                <td>20.50</td>
                <td>0</td>
                <td>1.15</td>
                <td>$ 21.65</td>
            </tr>
        </table>
    </div>

    <div class="total">
        <table class="tabla" border="1px">
            <tr class="titulo">
                
                <td><strong>Neto</strong></td>
                <td><strong>Iva</strong></td>
                <td><strong>Cant. Kg</strong></td>
                <td><strong>Total a pagar</strong></td>
            </tr>
            <tr>
                <td>61.10</td>
                <td>3.30</td>
                <td>3</td>
                <td>$ 69.40</td>
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