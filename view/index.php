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
			<source src="../../picaud-video/banner.mp4" type="video/mp4">
		</video>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">¿Que es discapacidad?</h4>
						<p class="card-text">“La discapacidad es un concepto que evoluciona y que resulta de la interacción.... <br></p>
						<a href="#" class="card-link"  data-toggle="modal" data-target="#myModal">Ver mas</a>
						                    <div class="modal fade" id="myModal">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">¿Que es discapacidad?</h4> <br>
														<button type="button" class="close" data-dismiss="modal">&times;</button>
													</div>
													<div class="modal-body">
														<img src="./src/img/img-dis.jpg" alt="">
															<h6>    
																    “La discapacidad es un concepto que evoluciona y que resulta de la interacción
																	entre las personas con deficiencias y las barreras debidas a la actitud y al
																	entorno que evitan su participación plena y efectiva en la sociedad, en igualdad
																	de condiciones con las demás”
															</h6>
													</div>
													<!-- Modal footer -->
													<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													</div>
													</div>
												</div>
											</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Sabias que..</h4>
						<p class="card-text">Alrededor de 10% de la poblacion mundial, Osea 650 millones de personas, viven con una discapacidad.</p>
						<a href="#" class="card-link"  data-toggle="modal" data-target="#myModal">Ver mas</a>

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