<?php
    // Conexion a base de datos
    require_once "../model/sesion/conexion.php";
    $conexion = conexion();

    // Recibir parametros
    $Tematica = $_POST["tematica"];

    $datos = array();
    $datos = null;

    $consulta = "SELECT * FROM TEMAS WHERE ID = '$Tematica'";
    $registros = mysqli_query($conexion, $consulta);
    if ($fila = mysqli_fetch_array($registros)) {
        $datos[]= array(
            0          => $fila[0],  
            1          => $fila[1]
        );
        // 0: ID,    1: DESCRIPCION
    }

    $json = json_encode( $datos, JSON_UNESCAPED_UNICODE );
    echo ( $json ) ; 

?>