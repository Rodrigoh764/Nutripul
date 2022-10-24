<!-- PLANTILLA PARA EL REGISTRO DE USUARIO NAV -->
<script>
    function salir() {
        let respuesta = confirm("¿Esta seguro que quiere salir?     Se perderan los datos registrados");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }
    }
</script>
<header>
    <nav>
        <ul>
            <a href="principal.php" onclick="return salir()"><img src="../img/frutas/logoTransp1.png" alt="logo"></a>

        </ul>
    </nav>
</header>