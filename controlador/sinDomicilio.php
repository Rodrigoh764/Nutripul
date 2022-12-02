<main>
    <div class="container">
    
    <div>
            <img id="perfil" src="../img/Perfil/perfil.png">
            <h1 id="nombre"><?php echo $ver["cliente_nombre"];
                            echo " ", $ver["cliente_apellidoPa"];
                            echo " ", $ver["cliente_apellidoMa"]; ?></h1>

        </div>

        
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
</main>

<?php
include("../footer/footer.php");
?>