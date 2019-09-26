<?php include "../model/sesion/seguridad.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PICAUD</title>
  <!-- Importamos los css comunes y propiedades de la pagina -->
  <?php include "./include/head.php"; ?>
  <!-- css propoio de la pagina -->
  <link rel="stylesheet" href="./src/css/pagina_contenido.css">
  <link rel="stylesheet" href="./src/css/animacion-letras.css">
  <link rel="stylesheet" type="text/css" href="src/css/animate.css">
  <style>
    .bg_card{
      background-image: url(src/img/fondo-preguntas-1.jpg);
      user-select: none;
      background-repeat: no-repeat;
      width: 100%;
      height: 500px;
    }
  </style>
</head>
<body >
  <?php include "./include/preload.php";?>   
  <!-- MENU -->
  <?php include "./include/header-iniciado.php"; ?>

  <!-- INICIO - CONTENIDO DE LA PAGINA -->
  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-3">
        <h2>Que es una Discapacidad</h2>
        <div> <img src="./src/img_taller/discapacidad-2.png" alt="" width="180" height="200"> </div>
        <p>Aqui veremos que una discapacidad y los diferentes tipo de discapacidad</p>
        <hr class="d-sm-none">
      </div>
      <div class="col-sm-9" >
        <div class="card bg_card">
          <div class="card-body" >
            <div class="row justify-content-end">
              <div class="col-9 pt-5 text-right">
                <h4 class="animated jackInTheBox delay-1s text-white"><b>¿ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet expedita, adipisci quaerat quo ?</b></h4>  
              </div>  
            </div>
            <div class="row justify-content-end">
              <div class="col-8 mt-5">
                <form class="animated flipInY delay-1s">
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1"><h5 class="text-white">Toggle this custom radio</h5></label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2"><h5 class="text-white">Or toggle this other custom radio</h5></label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio3"><h5 class="text-white">Toggle this custom radio</h5></label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio4"><h5 class="text-white">Or toggle this other custom radio</h5></label>
                  </div>
                </form>  
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <ul class="pagination pagination-xl" >
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </div>
        <div class="row">
          <h3>Recuerda</h3>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias amet porro illum maxime totam explicabo hic, dolor ex qui repudiandae doloribus dolores enim ad ea, unde earum similique dicta saepe.
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <?php include "include/footer.php"; ?>
  <!-- Fin de footer -->

  <!-- FIN - CONTENIDO DE LA PAGINA -->

  <?php include "./include/scriptsComun.php"; ?>
</body>
</html>