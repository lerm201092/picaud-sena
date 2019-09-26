<?php include "../model/sesion/seguridadLogin.php"; ?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/login.css">
    <style>
    label,input{
        color: #ffffff;
    }
    </style>
</head>
<body style="background: url(./src/img/fondo-verde-1.jpg)">
 <!-- Preload -->
 <?php include "./include/preload.php";?>   
<!-- fin de preload -->
    <!-- MENU -->

    <?php include "./include/header.php"; ?>

    <!-- INICIO - CONTENIDO DE LA PAGINA -->
   
   
<div class="container" >
    <div class="row justify-content-center">  
        <div class="card  col-lg-7" style="background: rgb(255, 255, 255,0.4)">
            <div class="row">
                <div class="col-lg-4">
                    <img src="./src/img/aprendiz-1.png" alt=""height="100%" width="100%">
                </div>
                    <div class="col-lg-8" style="border-left: .5px solid #e9ecef">
                        <div style=" margin: 0 auto;">
                        <h4 class="text-left" style="font-weight:600; color:#ffffff; margin-bottom: 50px;">INICIAR SESIÓN</h4>
                            <form>
                            <div class="form-group">
                                <label for="email">Usuario</label>
                                <input type="text" class="form-control"  id="txt_user" />
                            </div>
                            <div class="form-group">
                                <label for="pwd">Contraseña</label>
                                <input type="password" class="form-control" id="txt_passw" />
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">Recuperar contraseña</label>
                            </div>
                                <a href ="#" style="background: #fc7323; color: #ffffff;" class="btn btn-basic" onclick="login()" >Login</a>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>  
</div>
   
   

   <!-- Footer -->
   <?php include "include/footer.php"; ?>
    <!-- Fin de footer -->

    <!-- FIN - CONTENIDO DE LA PAGINA -->
    <?php include "./include/scriptsComun.php"; ?>

    <script src="../controller/login.js"></script> 
  
</body>
</html>