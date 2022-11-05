<div class="container2">
    <h1 id="nombre"><?php echo $ver["cliente_nombre"];
                    echo " ", $ver["cliente_apellidoPa"];
                    echo " ", $ver["cliente_apellidoMa"]; ?></h1>
    <div id="boton">
        <button><a href="llenadoDomicilio.php?id=<?php echo $id ?>">Actualizar</a> </button>
    </div>

</div>