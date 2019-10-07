<!DOCTYPE html>
<html lang="en">
<head>
    <title>PICAUD</title>
    <!-- Importamos los css comunes y propiedades de la pagina -->
    <?php include "./include/head.php"; ?>
    <!-- css propoio de la pagina -->
    <link rel="stylesheet" href="./src/css/grupo.css">

</head>
<body>
    <!-- MENU -->
    <?php include "./include/header.php"; ?>

    <!-- INICIO - CONTENIDO DE LA PAGINA -->

        <div class="container">

            <div class="page-header">
                <h1 id="timeline">Grupo de trabajo</h1>
            </div>
            <ul class="timeline">
                <li>
                  <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Carmela de la hoz  <img class="avatar" src="./src/img/cs.png" alt=""></h4>
                      <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                    </div>
                    <div class="timeline-body">
                      <p>, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio.</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Juan Bolaños</h4>
                    </div>
                    <div class="timeline-body">
                      <p>, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Jose Rodriguez</h4>
                    </div>
                    <div class="timeline-body">
                      <p>, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</p>
                    </div>
                  </div>
                </li>
                <li class="timeline-inverted">
                  <div class="timeline-badge primary"><i class="glyphicon glyphicon-credit-card"></i></div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4 class="timeline-title">Luis</h4>
                    </div>
                    <div class="timeline-body">
                      <p>, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</p>
                    </div>
                  </div>
                </li>
            </ul>
        </div>

    <!-- Footer -->
    <?php include "include/footer.php"; ?>
    <!-- Fin de footer -->

    <!-- FIN - CONTENIDO DE LA PAGINA -->
</body>
</html>