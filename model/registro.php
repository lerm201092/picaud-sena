<?php
    // Conexion a base de datos
    require_once "../model/sesion/conexion.php";
    $conexion = conexion();

    // Recibir parametros
    $opcion = $_POST["opcion"];
    
    // INICIO LLENAR TIPO ID
    if($opcion == "llenar_tipoid"){
        $datos = array();
        $datos = null;

        $consulta = "SELECT * FROM TIPO_DOCUMENTO ORDER BY DESCRIPCION ASC";
        $registros = mysqli_query($conexion, $consulta);
        while ($fila = mysqli_fetch_array($registros)) {
            $datos[]= array(
                0          => $fila[0],  
                1          => $fila[1]
            );
            // 0: ID,    1: DESCRIPCION
        }

        $json = json_encode( $datos, JSON_UNESCAPED_UNICODE );
        echo ( $json ) ; 
    }
    // FIN LLENAR TIPO ID

    
    // INICIO GUARDAR 
    if($opcion=="guardar"){
        $datos = array();
        $datos = null;

        $tid = $_POST["tipo_id"];
        $nid =  $_POST["num_id"];
        $nom = $_POST["nombres"];
        $ape = $_POST["apellidos"];
        $sex = $_POST["sexo"];
        $ciu = $_POST["ciudad"];
        $tel = $_POST["telefono"];
        $fna = $_POST["fecha"];
        $ema = $_POST["email"];
        $con = $_POST["contrasena"];
        $con = password_hash($con, PASSWORD_DEFAULT, ['cost' => 10]);
        $consulta = "INSERT INTO PERSONAS 
                    (   rel_tipodoc_id,
                        id,
                        nombres,
                        apellidos,
                        telefono, 
                        email,
                        sexo, 
                        ciudad,
                        fecha_nac,
                        fecha_reg,
                        contrasena_1,
                        contrasena_2,
                        estado,
                        rol)
                    VALUES( $tid,
                            '".$nid."',
                            '".$nom."',
                            '".$ape."',
                            '".$tel."',
                            '".$ema."',
                            '".$sex."',
                            '".$ciu."',
                            '".$fna."',
                            SYSDATE(),
                            '".$con."',
                            0,
                            1,
                            1)";
            if (mysqli_query($conexion, $consulta)) {
                $datos["ok"]["mensaje"] = "ok";
            } else {
                $mensaje = mysqli_error($conexion);
                $array_aux = explode(" ", $mensaje);
                $tipo = $array_aux[0];
                $tipo = strtolower($tipo);

                $consulta = eliminar_espacio($consulta);
                
                //Respuesta 
                $datos["error"]["tipo"] = $tipo;
                $datos["error"]["consulta"] = $consulta;
                $datos["error"]["mensaje"] = $mensaje;
            }
            $json = json_encode( $datos, JSON_UNESCAPED_UNICODE );
            echo ( $json );
    }
    // FIN GUARDAR


    // funcion para quitar espacio del error
    function eliminar_espacio($consulta){
        $consulta = str_ireplace(PHP_EOL, " ", $consulta);
        $consulta = str_ireplace("\n", " ", $consulta);
        $consulta = str_ireplace("                  ", " ", $consulta);
        $consulta = str_ireplace("                 ", " ", $consulta);
        $consulta = str_ireplace("                ", " ", $consulta);
        $consulta = str_ireplace("               ", " ", $consulta);
        $consulta = str_ireplace("             ", " ", $consulta);
        $consulta = str_ireplace("            ", " ", $consulta);
        $consulta = str_ireplace("           ", " ", $consulta);
        $consulta = str_ireplace("          ", " ", $consulta);
        $consulta = str_ireplace("         ", " ", $consulta);
        $consulta = str_ireplace("        ", " ", $consulta);
        $consulta = str_ireplace("       ", " ", $consulta);
        $consulta = str_ireplace("      ", " ", $consulta);
        $consulta = str_ireplace("     ", " ", $consulta);
        $consulta = str_ireplace("    ", " ", $consulta);
        $consulta = str_ireplace("   ", " ", $consulta);
        $consulta = str_ireplace("  ", " ", $consulta);

        return $consulta;
    }

?>