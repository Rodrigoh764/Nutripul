<?php
    function conectar(){
        $conexion = mysqli_connect("localhost","root","","nutripulp");
        return $conexion;
    }
?>