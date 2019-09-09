<?php 
    function conexion() {
        $conexion = mysqli_connect("localhost", "root", "", "picaud");  
        mysqli_set_charset($conexion,"utf8");
        return $conexion;       
    }
?>