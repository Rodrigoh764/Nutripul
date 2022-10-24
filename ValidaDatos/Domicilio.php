 <?php

include("../conexionbd/conexionBD.php");
$id = $_GET["id"];
$conexion = conectar();

//consulta a la tabla clientes
$consultaCliente = "select * from clientes where cliente_id ='$id'";
$cliente = mysqli_query($conexion, $consultaCliente);
$ver = mysqli_fetch_array($cliente);



?>



<link rel="stylesheet" href="../css/nav.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/footer.css"> 

<header>
    <nav>
        <ul>
            <a href="#"><img src="../img/frutas/logoTransp1.png" alt="logo"></a>
            <div id="barra">
                <li><a href="pruebas.php " onclick="return salir()">salir</a></li>
                <li><a href="#">Mis Compras </a></li>
                <li><a href="../php/principalUser2.php?id=<?php echo $id; ?>">INICIO</a></li>
                <div id="buscador">
                    <input type="search" value="Buscar Producto" id="buscador">
                </div>
            </div>

        </ul>
    </nav>
</header>
<?php


$sql = "select * from domicilio where cliente_id ='$id'";
$re = mysqli_query($conexion, $sql);
if($mostrar = mysqli_fetch_array($re)){
  ?>

    <main>
    <div class="container">
        <img id="perfil" src="../img/Perfil/perfil.png">

        <div id="tabla">

            <table border="1.5px">
                <fieldset>
                    <legend style="text-align: center;">Datos personales</legend>
                    <tr>
                        <th>Alcaldia</th>
                        <th>Colonia</th>
                        <th>Número interior</th>
                        <th>Número exterior</th>
                    </tr>
                    <tr>
                        <td><?php echo $mostrar["alcaldia"] ?></td>
                        <td><?php echo $mostrar["colonia"] ?></td>
                        <td><?php echo $mostrar["numInt"] ?></td>
                        <td><?php echo $mostrar["numExt"] ?></td>
                    </tr>
                    <tr>
                        <th colspan="4">Entre Calle Y Calle</th>

                    </tr>
                    <tr>
                        <td colspan="4"> </td>
                    </tr>
                    <tr>
                        <th>Codigo Postal</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Genero</th>
                    </tr>
                    <tr>
                        <td><?php echo $mostrar["codigoPostal"] ?></td>
                        <td><?php echo $ver["cliente_correo"] ?></td>
                        <td><?php echo $ver["cliente_telefono"] ?></td>
                        <td><?php echo $mostrar["genero"] ?></td>
                    </tr>
                    <tr>
                        <th colspan="4">Referencia del lugar</th>

                    </tr>
                    <tr>
                        <td colspan="4"><?php echo $mostrar["referencia"] ?></td>
                  
                    </tr>
                </fieldset>
            </table>

        </div>

    </div>
    <div class="container2">
        <h1 id="nombre"><?php echo $ver["cliente_nombre"]; echo " ",$ver["cliente_apellidoPa"]; echo " ",$ver["cliente_apellidoMa"]; ?></h1>
        <div id="boton">
            <button><a href="llenadoDomicilio.php?id=<?php echo $id ?>">Actualizar</a> </button>
        </div>

    </div>

</main>
<?php
}else{
?>
    <main>
    <div class="container">
        <img id="perfil" src="../img/Perfil/perfil.png">

        <div id="tabla">

            <table border="1.5px">
                <fieldset>
                    <legend style="text-align: center;">Datos personales</legend>
                    <tr>
                        <th>Alcaldia</th>
                        <th>Colonia</th>
                        <th>Número interior</th>
                        <th>Número exterior</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="4">Entre Calle Y Calle</th>

                    </tr>
                    <tr>
                        <td colspan="4"> </td>
                    </tr>
                    <tr>
                        <th>Codigo Postal</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Genero</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td><?php echo $ver["cliente_correo"] ?></td>
                        <td><?php echo $ver["cliente_telefono"] ?></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="4">Referencia del lugar</th>

                    </tr>
                    <tr>
                        <td colspan="4"></td>
                      
                    </tr>
                </fieldset>
            </table>

        </div>

    </div>
    <div class="container2">
        <h1 id="nombre"><?php echo $ver["cliente_nombre"],$ver["cliente_apellidoPa"],$ver["cliente_apellidoMa"]; ?></h1>
        <div id="boton">
            <button><a href="llenadoDomicilio.php?id=<?php echo $id ?>">Actualizar</a> </button>
        </div>

    </div>

</main>

<?php
}

?>


<?php
include("../registro/footer.php");

?> 