<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nav.css">
   
    <title>principal</title>
</head>
<script>
    function salir(){
        let respuesta = confirm("Seguro que quieres salir, los datos se perderan");
        if(respuesta == true){
            return true;
        }else{
            return false;
        }
    }
</script>

<body>
    <header>
        <nav>
            <ul>
                <a href="#"><img src="img/logoTransp1.png" alt="logo"></a>
                <div id="barra">
                    <li><a href="pruebas.php "onclick="return salir()">salir</a></li>
                    <li><a href="#">Mis Compras </a></li>
                    <li><a href="validarUser.html">Ingresar</a></li>
                    <li><a href="registro.html">Crear Cuenta</a></li>
                    <div id="buscador">
                        <input type="search" value="Buscar Producto" id="buscador">
                    </div>
                </div>

            </ul>
        </nav>
    </header>
</body>

</html>