<?php include "../model/sesion/seguridad.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PICAUD</title>
  <?php include "./include/head.php"; ?>
  <link rel="stylesheet" href="./src/css/tematica.css">
  <style>
  .w-100 {
    width: 100%!important;
    height: 520px!important;  
    }
    .carousel-innerm {
    position: relative;
    width: 100%;
    height: 420px;
    overflow: hidden;
}
    /*
Full screen Modal 
*/
.fullscreen-modal .modal-dialog {
  margin: 0;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
}
@media (min-width: 768px) {
  .fullscreen-modal .modal-dialog {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .fullscreen-modal .modal-dialog {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .fullscreen-modal .modal-dialog {
     width: 1170px;
  }
}
</style>
</head>
<body>
  <?php include "./include/preload.php";?>   
  <?php include "./include/header-iniciado.php"; ?>
  <input type="hidden" id="idTema" value="2">

  <div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
      <h2 id="IdTematica">Que es Discapacidad</h2>
       <div style="padding-bottom: 50px; width:100%;"> <img id="UrlIamge" src="./src/img/tematicas/intelectual.png" /> </div>
      <h3 >Seguimiento Protocolo</h3>

      <ul class="nav nav-pills flex-column">
        <li class="nav-item"><a class="nav-link active" href="#">Que es una discapacidad</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Incapacidad auditiva</a></li>
        <li class="nav-item"><a class="nav-link" href="#">discapacidad visual</a></li>
        <li class="nav-item"><a class="nav-link disabled" href="#">discapacidad motora</a></li>
      </ul>
       <hr class="d-sm-none">
    </div>
    <div class="col-sm-9">
    <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-innerm">
  <div class="carousel-item active">
    <img src="./src/img/tematicas/slider1.PNG" alt="Los Angeles">
  </div>
  <div class="carousel-item">
    <img src="./src/img/tematicas/slider2.PNG" alt="Chicago">
  </div>
  <div class="carousel-item">
    <img src="./src/img/tematicas/slider3.PNG" alt="New York">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>

<!-- --------------------------------------- modal ---------------------------- -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal"></li>ver pantalla completa</button>
	
	<!-- Modal -->
	<div class="modal fullscreen-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-xl" role="document">
	    <div class="modal-content col-sm-12">
	     
	      <div class="modal-body">
          <div class="col-sm-12">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./src/img/tematicas/slider1.PNG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./src/img/tematicas/slider2.PNG" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./src/img/tematicas/slider3.PNG" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        <button type="button" class="btn btn-primary">Siguinte</button>
	      </div>
	    </div>
	  </div>
    </div>
    </div>
<!-- --------------------------- fin modal ---------------------------- -->
        <div class="row">
          <p class="mr-right">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt amet delectus, quasi consectetur porro cum neque unde nam doloremque non aliquid repellat officia libero nesciunt consequatur temporibus rerum? Dolore, nisi.</p>
        </div>
        <a type="button" href="./pagina2.php" class="btn btn-outline-success">comprobar lo aprendido <i class="fa fa-arrow-circle-o-right"></i></a>
    </div>
  </div>
</div>
  <!-- Footer -->
  <?php include "include/footer.php"; ?>
  <!-- Fin de footer -->
  <!-- FIN - CONTENIDO DE LA PAGINA -->
  <?php include "./include/scriptsComun.php"; ?>
  <script>
  var Tematica = "<?php echo $_GET["id"]; ?>";
  </script>
  <script src="../controller/tematica.js"></script>
</body>
</html>