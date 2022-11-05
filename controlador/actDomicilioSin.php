

<link rel="stylesheet" href="../css/Domicilio.css">
<main>
    <div class="container">

        <div id="tabla">
            <form action="../controlador/actDomicilio.php?id=<?php echo $id ?>" method="POST">
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
                            <td>
                                <select name="alcaldia" required >
                                
                                    <option value="Álvaro obregón">Álvaro obregón</option> 
                                    <option value="Azcapotzalco">Azcapotzalco</option>
                                    <option value="Benito Juárez">Benito Juárez</option>
                                    <option value="Cuajimalpa">Cuajimalpa</option>
                                    <option value="Coyoacán">Coyoacán</option>
                                    <option value="Cuahutémoc">Cuahutémoc</option>
                                    <option value="Gustavo A. Madero">Gustavo A. Madero</option>
                                    <option value="Iztacalco">Iztacalco</option>
                                    <option value="Iztapalapa">Iztapalapa</option>
                                    <option value="Magdalena Contreras">Magdalena Contreras</option>
                                    <option value="Miguel Hidalgo">Miguel Hidalgo</option>
                                    <option value="Milpa Alta">Milpa Alta</option>
                                    <option value="Tláhuac">Tláhuac</option>
                                    <option value="Tlalpan">Tlalpan</option>
                                    <option value="Venustiano Carranza">Venustiano Carranza</option>
                                    <option value="Xochimilco">Xochimilco</option>
                                    <option selected="selected"></option>
                                 
                                </select>
                               
                            </td>
                            <td><input type="text" name="colonia"></td>
                            <td><input type="text" name="numInterior"></td>
                            <td><input type="text" name="numExterior"></td>
                        </tr>
                        <tr>
                            <th colspan="4">Entre Calle Y Calle</th>

                        </tr>
                        <tr>
                            <td colspan="4"><input type="text" name="calle" maxlength="50"></td>
                        </tr>
                        <tr>
                            <th>Codigo Postal</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Genero</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="cp"></td>
                           
                            <td id="fijo"><?php echo $res["cliente_correo"] ?></td>
                            <td id="fijo"><?php echo $res["cliente_telefono"] ?></td>
                           
                          
                            
                            <td><select name="genero">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                    <option selected="selected"></option>
                                </select></td>
                        </tr>
                        <tr>
                            <th colspan="4">Referencia del lugar</th>

                        </tr>
                        <tr>
                            <td colspan="4"><input type="text" name="referencia"></td>
                        </tr>
                    </fieldset>
                </table>
                <div id="boton">
                    <button type="submit">Confirmar</button>
                </div>
            </form>
        </div>

    </div>

</main>