<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/registro.css">
    <style>
        p,label{
            color: #ffffff;
        }
        option{
            color: rgb(0, 0, 0) !important;
        }
        ::placeholder { color: rgb(0, 0, 0) !important; }
        :-ms-input-placeholder { color: rgb(0, 0, 0) !important; } /* IE 10+ */
        ::-webkit-input-placeholder { color: rgb(0, 0, 0) !important; } /* WebKit */
        ::-moz-placeholder { color: rgb(0, 0, 0) !important; } /* Firefox 19+ */
    </style>
</head>
<body style="background: url(./src/img/fondo-verde-1.jpg)">
 <!-- Preload -->
 <?php include "./include/preload.php";?>   
<!-- fin de preload -->

    <!-- MENU -->
    <?php include "./include/header.php"; ?>

<!-- INICIO - CONTENIDO DE LA PAGINA -->
    <div class="container">
        <div class="row">  
            <div class="card  col-12 col-md-10 col-lg-12" style="background: rgb(255, 255, 255,0.4)">
                <div class="row">
                    <div class="col-lg-4">
                        <h4 class="text-center" style="font-weight:600; color:#ffffff; margin-bottom: 50px;">Registro de usuarios</h4>
                        <img src="./src/img/aprendices.png" alt="" width="100%" style="padding-right: 20px;">
                    </div>
                    <div class="col-lg-8" style="border-left: .5px solid #ffffff">
                            <div class="row">
                                    <div class="col-12">
                                        <p class="col-12 text-center" id="alertaMensaje" style="display:none"></p>
                                        <p class="col-12 text-center"><b>Datos Personales</b></p>
                                    </div>
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="sel_tipoid">Tipo de identificacion: </label>
                                            <select id="sel_tipoid" class="form-control" name="registro" tipo="select">
                                                <option selected>- Escoja una opción -</option>
                                            </select>
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Numero de identificación: </label>                                
                                            <input id="txt_numid" type="text" class="form-control" placeholder="Ingrese identificación ..." name="registro" tipo="input" onKeyPress="return soloNumeros(event, $(this))"/>
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Nombres: </label>                                
                                            <input id="txt_nombres" type="text" class="form-control" placeholder="Ingrese nombres ..." name="registro" tipo="input"/>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Apellidos: </label>                                
                                            <input id="txt_apellidos" type="text" class="form-control" placeholder="Ingrese apellidos ..." name="registro" tipo="input"/>
                                        </div>
                                    </div>      
                                    
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Sexo: </label>
                                            <select id="sel_sexo" class="form-control" name="registro" tipo="select">
                                                <option selected value="0">- Escoja una opción -</option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
                                        </div>
                                    </div>   
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Ciudad: </label>                                
                                            <input id="txt_ciudad" type="text" class="form-control" placeholder="Ingrese Ciudad ..." name="registro" tipo="input"/>
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Teléfono: </label>                                
                                            <input id="txt_telefono" type="text" class="form-control" placeholder="Ingrese teléfono ..." name="registro" tipo="input" onKeyPress="return soloNumeros(event, $(this))"/>
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Fecha Nacimiento: </label>                                
                                            <input id="txt_fecha" type="date" class="form-control" placeholder="Ingrese Fecha ..." name="registro" tipo="input"/>
                                        </div>
                                    </div>
                
                                </div>
                                <hr style="margin: 10px 15px;">
                                <div class="row">
                                    <div class="col-12">
                                            <p class="col-12 text-center"><b>Datos de usuario</b></p>
                                    </div>                 
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Email: </label>                                
                                            <input id="txt_email_1" type="text" class="form-control" placeholder="Ingrese Email ..." name="registro" tipo="input"/>
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Verificar email: </label>                                
                                            <input id="txt_email_2" type="text" class="form-control" placeholder="Ingrese Email ..." name="registro" tipo="input"/>
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Contraseña: </label>                                
                                            <input id="txt_contrasena_1" type="text" class="form-control" placeholder="Ingrese Contraseña ..." name="registro" tipo="input"/>
                                        </div>
                                    </div>
                
                                    <div class="col-md-6" >
                                        <div class="form-group">
                                            <label for="">Verificar Contraseña: </label>                                
                                            <input id="txt_contrasena_2" type="password" class="form-control" placeholder="Ingrese Contraseña ..." name="registro" tipo="input"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 text-right">
                                    <a href="#" class="btn btn-danger" onclick="limpiar()"><i class="fa fa-trash"></i> Limpiar</a>
                                    <a href="#" class="btn btn-success" onclick="guardar()"><i class="fa fa-save"></i> Guardar</a>
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
    <script src="../controller/registro.js"></script>
</body>
</html>