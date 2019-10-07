<!DOCTYPE html><html lang='en' class=''>
<head>
<?php include "./include/head.php"; ?>
<link rel="stylesheet" href="./src/css/style-menu-circle.css">
<!------ Include the above in your HEAD tag ---------->
<style>
.wrapper {
    display: flex;
    width: 100%;
}
#sidebar ul li.active>a, a[aria-expanded="true"] {
    color: #fff;
    background: #fc7323;
}
.cont{
    margin-left: 14%;
}
#sidebar .sidebar-header {
    padding: 20px;
    background:rgb(35, 130, 118);
}
#sidebar ul li.active>a, a[aria-expanded="true"] {
    color: #fff;
    background: #238276;
}
#sidebar {
    width: 250px!important;
    position: relative!important;
    top: 0!important;
    left: 0!important;
    height: 100vh!important;
    z-index: 999!important;
    background:rgb(35, 130, 118) !important;
    color: #fff!important;
    transition: all 0.3s!important;
    width: 150px !important;
}
.bg-dark {
    background-color: #fc7323!important;
    margin: 0;
}
#img {
    background-image:url(./src/img/teoria.png);
    height:250px;
    width:250px;
    background-position:center;
    background-size: contain;
    margin: 15px;
    box-shadow: -2px 2px 80px #666;   
         /* Sombra normal */
}

.boton {
  color: #fff !important;
  font-size: 20px;
  font-weight: 500;
  padding: 0.5em 1.2em;
  background: #318aac;
  position: relative;
  border: 2px solid #318aac;

  outline-color: rgba(49, 138, 172, 0.4);
  transition: all 1s cubic-bezier(0.19, 1, 0.22, 1);
}
.boton:hover {
  box-shadow: inset 0 0 20px rgba(49, 138, 172, 0.5), 0 0 20px rgba(49, 138, 172, 0.4);
  outline-color: rgba(49, 138, 172, 0);
  outline-offset: 80px;
  text-shadow: 1px 1px 6px #fff;
}

#img2 {
    background-image:url(./src/img/protocolo.png);
    height:250px;
    width:250px;
    background-position:center;
    background-size: contain;
    margin: 15px;
    box-shadow: -2px 2px 80px #666;   


}

</style>
</head>
<body style="background: url(./src/img/barranquilla1.jpg);margin-right: 0px;margin-bottom: 0px;margin-left: 0px;margin-top: 0px;">
<?php include "./include/header-iniciado.php"; ?> 
<!-- ------------------------------ menu lateral ----------------------------- -->
<div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-2">
            <div class="sidebar-header">
                <h3>Usuario</h3>
            </div>
    
            <ul class="list-unstyled components">
                <p> <li>
                        <a href="#">Inicio</a>
                    </li></p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Teoria</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
              
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Protocolo</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
            </ul>
    
        </nav>
   
        <!-- Page Content -->
        <div id="content">
                <div class="row ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
    
                    <button type="button" id="sidebarCollapse" class="btn btn-dark">
                        <li class="fa fa-about"></li>
                        <span></span>
                    </button>
                </div>
            </nav>
        </div>    
                <div class="row">
                    <div class="cont">
                            <div></div>
                                <input id="img" type="button" class="btn btn-Link circle boton">
                                <input id="img2" type="button" class="btn btn-Link circle boton" onclick="location.href='./tematica.php?id=1';">
                            <div></div>
                            </div>
                        </div>               
                    </div>
                </div>
           
<!-- -----------------------------fin menu lateral---------------------------- -->

<?php include "./include/footer.php"; ?>
<?php include "./include/scriptsComun.php"; ?>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>