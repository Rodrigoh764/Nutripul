<?php 
include("../nav/navUsuario.php");
$id = $_GET["id"];
$codigo = rand(1000, 10000);

?>

<link rel="stylesheet" href="../css/eliminarDatos.css">

<body>
    <h1></h1>
    <div id="formulario">
        <form action="../controlador/eliminaCuenta.php?codigo=<?php echo $codigo; ?>&id=<?php echo $id; ?> " method="POST">
        <h1 id="titulo">¡Seguro que quiere eliminar su cuenta!</h1>
            <p>Se perderan los datos registrados, si desea continuar ingrese el siguiente codigo de confirmación</p>
            <h1 id="codigo"><?php echo $codigo ; ?></h1>
            <input type="number" name="verificacion" id="entrada" placeholder="Codigo de Verificacion" required><br>
            <button type="submit" id="registra">CONFIRMAR</button>
        </form>
      
    </div>

</body>