<?php
    function conectar(){
        $conexion = mysqli_connect("localhost","root","","nutripul");
        return $conexion;
    }
?>