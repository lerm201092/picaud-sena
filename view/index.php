<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php";?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/index.css">
</head>
<body>

	 <!-- Preload --> 
    <?php include "./include/preload.php";?>               
	 <!-- fin de preload -->

    <!-- MENU -->
    <?php include "./include/header.php"; ?>

	<!-- CONTENEDOR DE LA PAGINA -->
	<div id="container_video">
		<video class="d-block w-100" muted autoplay>
			<source src="./src/video/banner.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Que es una discapacidad</h4>
						<p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi nisi architecto unde tempora rem consectetur, dolores. </p>
						<a href="#" class="card-link">Ver mas</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Sabias que..</h4>
						<p class="card-text">Alrededor de 10% de la poblacion mundial, Osea 650 millones de personas, viven con una discapacidad.</p>
						<a href="#" class="card-link">Ver mas</a>

					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Turismo accesible</h4>
						<p class="card-text">análisis de los servicios hoteleros y gastronómicos de la ciudad de Barranquilla</p>
						<a href="https://sena-primo.hosted.exlibrisgroup.com/primo-explore/fulldisplay?docid=sena_dspace11404%2F4283&context=L&vid=SENA&lang=es_ES&search_scope=sena_completo&adaptor=Local%20Search%20Engine&tab=sena_completo&query=any,contains,turismo%20accesible&offset=0" class="card-link">Ver Documento</a>
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
</body>
</html>