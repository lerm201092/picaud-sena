<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/pagina_contenido.css">
    <link rel="stylesheet" href="./src/css/animacion-letras.css">
    <style>
      .jpreguntas{
       width:auto;
       height:100%;
       position: absolute;
       }
        h4, h5 {
    animation-duration: 3s;
    animation-name: slidein;
    position: relative;
    
  }
  .card{
    position:relative;
    width:auto;
  }
  @keyframes slidein {
    from {
      margin-left: 100%;
      width: 300%
    }
  
    to {
      margin-left: 0%;
      width: 100%;
    }

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
          <div> <img src="./src/img/discapacidad-2.png" alt="" width="180" height="200"> </div>
          <p>Aqui veremos que una discapacidad y los diferentes tipo de discapacidad</p>
          <h3>Seguimiento de los temas</h3>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Que es una discapacidad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Inacapacidad auditiva</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">discapacidad visual</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">discapacidad motora</a>
            </li>
          </ul>
          <hr class="d-sm-none">
      </div>
        <div class="col-sm-9" >
          <div class="card">
          <img class="jpreguntas" src="./src/img/FONDO-PREGUNTAS.jpg" alt="">
       
            <div class="card-body" >

              <!-- Center-aligned -->
              
                <div class="card-body col-lg-9 justify-content-center" style="float:right;">
                <ul class="pagination pagination-sm" >
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul><br>
              <h4>¿ Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet expedita, adipisci quaerat quo ?</h3><br>
      
                </div>
                <div class="card-body col-lg-9 justify-content-center" style="float:right;">              
              <h5>A)<i>Respuesta 1</i></h5>
              <h5>B)<i>Respuesta 2</i></h5>
              <h5>C)<i>Respuesta 3</i></h5>
              <h5>D)<i>Respuesta 4</i></h5> 
            <br>
              <a type="button" href="./pagina1.php" class="btn btn-outline-success">Siguiente tema <i class="fa fa-arrow-circle-o-right"></i></a>
</div>
            </div>
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