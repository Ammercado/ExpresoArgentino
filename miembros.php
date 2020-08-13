<?php
require("libs/fetch_data.php");
include("libs/fetchTP.php");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Expreso Argentino">
    <meta name="keywords" content="Expreso Argentino, VTC, ETS2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido | Expreso Argentino VTC</title>
    <link rel="icon" href="./Logo_EXP_ARG_nuevo.ico">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">
</head>



<body>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <?php include("header.php") ?>
    <!-- Header End -->
    <!-- Aboutus Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="aboutus-page-text">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 m-auto">
                        <div class="section-title">
                            <h2>QUIÉNES SOMOS Y QUÉ HACEMOS</h2>
                            <p>Expreso Argentino es VTC del juego Euro Truck Simulator 2 y American Truck Simulator, en donde tenemos una trayectoria de 5 años. Hacemos convoys diarios, Internos, multi-empresas e internacionales. Luego de un largo periodo de descanso volvimos y estamos con ganas de divertirnos mas que nunca y lograr muchos objetivos nuevos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Aboutus Section End -->
    <!-- Trainer Section Begin -->

    <section class="trainer-section gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="section-title">

                        <h2>Nuestro Equipo</h2>

                        <p>Elige el equipo a ver</p>

                    </div>

                </div>
                <div class="col-lg-12">

                    <div class="gallery-controls">

                        <ul id="active">

                            <li class="active" data-filter="*"></li>

                            <li data-filter=".vtc">VTC Manager</li>

                            <li data-filter=".mediam">Media Manager</li>

                            <li data-filter=".Events">Events Manager</li>

                            <li data-filter=".Reclutador">Team Reclutador</li>

                            <li data-filter=".Developer">Developer</li>

                            <li data-filter=".Conductor">Conductores</li>

                        </ul>

                    </div>

                </div>
            </div>

            <style>
 
            </style>
            <div class="container">
                <div class="members  gallery-filter" id="mem">
                    <?php getMembers() ?>
                </div>
            </div>
        </div>

    </section>

    <!-- Trainer Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">

        <div class="col-lg-12 text-center">

            <div class="footer-logo-item">

                <div class="social-links">

                    <?php getWebs(); ?>

                </div>

            </div>

        </div>

        <div class=" copyright-text">

            <div class="container">

                <div class="row">

                    <div class="col-lg-12 text-center">

                        <div class="ct-inside">

                            <!-- Link back to Colorlib can"t be removed. Template is licensed under CC BY 3.0. -->

                            <?php include('./footer.php') ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

<script type="text/javascript">
    $(document).ready(function() {

        var hide = true;

        if (hide !== false) {

            $("#mem").css("display", "none");

        }

        $("#active").click(function() {

            hide = true;

            $("#mem").css("display", "flex");

        });
    });
</script>



</html>