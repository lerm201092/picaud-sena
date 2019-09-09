<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
</head>
<body>
    <h1>Pagina Administrador</h1>
    <h4>Bienvenido <?php echo $_SESSION["nombres"]." ".$_SESSION["apellidos"].",  Correo: ".$_SESSION['email'] ?></h4>
    <a href="../../model/sesion/logout.php">Cerrar Sesión</a>
</body>
</html>