<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <style>
    .btn-I{
      float:right;
    }
    .btn-outline-info {
    color: #17a2b8;
    border-color: #17a2b8;
    height: 100px;
    }
    button {
    -webkit-appearance: button;
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    width:100px;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: center;
    align-items: flex-start;
    cursor: default;
    box-sizing: border-box;
    margin: 0.4em;
    font: 400 13.3333px Arial;
    padding: 6px 6px;
    border-width: 2px;
    border-style: outset;
    border-color: buttonface;
    border-image: initial;
}

    </style>
</head>
<body>
    <!-- MENU -->
    <?php include "./include/header.php"; ?>

    <!-- INICIO - CONTENIDO DE LA PAGINA -->
    <div class="container">



<div class="row">
  <div class="col-sm-6">
    <div class="card">


      <div class="card-body">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <button type="button" class="btn btn-outline-info">Info</button>
  <button type="button" class="btn btn-outline-info">Info</button>
  <br>
  <button type="button" class="btn btn-outline-info">Info</button>
      </li>
      <li class="nav-item">
      <button type="button" class="btn btn-outline-info">Info</button>
  <br>
  <button type="button" class="btn btn-outline-info">Info</button>
  <button type="button" class="btn btn-outline-info">Info</button>     
   </li> 
      </ul>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
     <div class="card-body">
      <ul class="navbar-nav ">
       <li class="nav-item">
         <button type="button" class="btn btn-outline-info">Info</button>
         <button type="button" class="btn btn-outline-info">Info</button>
       <br>
         <button type="button" class="btn btn-outline-info">Info</button>
       </li>
       </ul>
       <ul class="navbar-nav">
       <li class="nav-item">
         <button type="button" class="btn btn-outline-info">Info</button>
       <br>
         <button type="button" class="btn btn-outline-info">Info</button>
         <button type="button" class="btn btn-outline-info">Info</button>      
       </li> 
      </ul>
    </div>
  </div>
</div>
</div>
</div>
<div>   <!-- Fin contenido de la pagina -->

    <!-- Footer -->
    <?php include "include/footer.php"; ?>
    <!-- Fin de footer -->

    <!-- FIN - CONTENIDO DE LA PAGINA -->

    <?php include "./include/scriptsComun.php"; ?>
    <?php include "./include/scriptsComun.php"; ?>
</body>
</html>