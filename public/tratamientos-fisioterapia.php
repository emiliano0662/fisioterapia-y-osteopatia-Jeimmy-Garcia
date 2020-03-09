<?php $lang = (empty($_GET['lang']) || $_GET['lang'] == 'es')? true : false; $menu = 'tratamientos'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>JEIMMY GARCIAS</title>
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" sizes="any">
    <link rel="stylesheet" type="text/css" href="./assets/css/bundle.min.css">
</head>

<body data-page="#page-index">
    <?php require_once('header.php') ?>
    <!--Bloque tratamientos fisioterapia-->
    <section class="block-physiotherapy-treatments">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 pr-lg-0">
                    <div class="content-image wow slideInLeft" data-wow-delay="0.5s" style="background-image: url('./assets/img/image-treatments-2.png');"></div>
                    <div class="container-left-main wow slideInLeft" data-wow-delay="0.5s">
                        <h2>Nuestros<br><span>Servicios</span></h2>
                        <p>Es por eso que buscamos ofrecer un programa de rehabilitación diferente para cada individuo, adaptado a sus necesidades físicas, personales, sociales y emocionales</p>
                    </div>
                    <img src="./assets/img/image-physiotherapy-treatments-2.png" class="img-fluid wow slideInLeft" data-wow-delay="0.5s">
                </div>
                <div class="col-12 col-lg-7 bg-main mt-5 pt-0 pt-lg-3">
                    <div class="container-p-main wow slideInRight" data-wow-delay="0.5s">
                        <h1>FISIOTERAPIA</h1>
                        <p>A lo largo de los años la fisioterapia se ha ido consolidando como el arte y la ciencia del tratamiento funcional que busca el bienestar de las personas. La fisioterapia se ha ido transformando en una ciencia multidisciplinar para poder dar en cada tratamiento un servicio INTEGRAL y PERSONALIZADO, donde cada paciente se implica en su proceso de rehabilitación.</p>
                    </div>
                    <div class="row wow slideInRight" data-wow-delay="0.5s">
                        <div class="col-12 col-lg-6">
                            <ul>
                                <li>Drenaje linfático<br>manual</li>
                                <li>Reeducación<br>Postural</li>
                                <li>Masajes<br>descontracturantes</li>
                                <li>Preparación al parto<br>y rehabilitación<br>post parto</li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-6">
                            <ul>
                                <li>Ejercicio<br>terapéutico</li>
                                <li>Conciencia corporal<br>y respiratoria</li>
                                <li>Conciencia corporal CORE<br>(trabajo de activación muscular)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="container-p-main type-two wow slideInRight" data-wow-delay="0.5s">
                        <h2>PIlates<br><span>Funcional</span></h2>
                        <p>El Pilates es una técnica de rehabilitación que se ha incluido dentro de las actividades físicas. Tiene una base teórico científica muy especializada que busca trabajar el centro de nuestro control muscular (CORE) y el uso de la mente buscando el equilibrio de todo el cuerpo. Con la técnica de Pilates se trabaja las necesidades de cada persona y se armonizan  procesos de aprendizaje bidireccional, concentración, conciencia corporal y el ejercicio físico.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h3>OSTEOPATÍA</h3>
                    <a href="./tratamientos-osteopatia.php" target="_self" class="btn btn-info">VER TRATAMIENTOS</a>
                </div>
            </div>
        </div>
    </section>
    <!--Fin bloque tratamientos fisioterapia-->
    <!--Bloque programa tu consulta-->
    <?php require_once('block-program-your-consultation.php') ?>
    <!--Fin bloque programa tu consulta-->
    <?php require_once('footer.php') ?>
    <script type="text/javascript" src="./assets/js/bundle.min.js"></script>
</body>

</html>