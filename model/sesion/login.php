<?php
    // Conexion a base de datos
    require_once "./conexion.php";
    $conexion = conexion();

    // Recibir parametros
    $user = $_POST["user"];
    $passw = $_POST["passw"];

    $datos = array();
    $datos = null;

    $consulta = "SELECT * FROM PERSONAS WHERE ID = '$user'"; 
    $registros = mysqli_query($conexion, $consulta);
    if ($fila = mysqli_fetch_array($registros)) {  
        $contrasena = $fila["contrasena_1"];      
        if(password_verify( $passw , $contrasena)){
            $rol = $fila["rol"];
            $datos["acceso"]="ok";            
            if($rol == 2){ $pagina = "./home.php"; }else{ $pagina = "../view/admin/home.php"; }
            $datos["rol"] = $rol;
            $datos["pagina"] = $pagina;

            session_start();
            $_SESSION["picaud_id"]         = $user;
            $_SESSION["nombres"]     = $fila["nombres"];
            $_SESSION["apellidos"]  = $fila["apellidos"];
            $_SESSION["rol"]        = $rol;
            $_SESSION["email"]      = $fila["email"];

        }else{    
            $datos["acceso"]  = "error";
            $datos["mensaje"] = "Contraseña Incorrecta";
        }
    }else{
        $datos["acceso"]  = "error";
        $datos["mensaje"] = "Usuario no encontrado";
    }

    $json = json_encode( $datos, JSON_UNESCAPED_UNICODE );
    echo ( $json ) ; 

?>