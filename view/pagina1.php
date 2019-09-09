<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/pagina_contenido.css">
</head >
<body>
    <?php include "./include/preload.php";?>   
    <!-- MENU -->
    <?php include "./include/header-iniciado.php"; ?>

    <!-- INICIO - CONTENIDO DE LA PAGINA -->


    <div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3">
      <h2>Que es una Discapacidad</h2>
      <div> <img src="./src/img/discapacidad-2.png" alt="" width="180" height="200"> </div>
      <p>Aqui aprenderas que es una discapacidad y los diferentes tipo de discapacidad</p>
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


    <div class="col-sm-9">
    <video class="d-block w-100" controls="" muted autoplay height="auto">
            <source src="./src/video/dispacidad.mp4" type="video/mp4">
        </video>
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
</body>
</html>