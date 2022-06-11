<?php

require("libs/fetchTP.php");

?>

<!DOCTYPE html>

<html lang="en">



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

    <!-- Js Plugins -->

    <script src="js/jquery-3.3.1.min.js"></script>

    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>

    <script src="js/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.validate.min.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/mixitup.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/jquery.slicknav.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/masonry.pkgd.min.js"></script>

    <script src="js/main.js"></script>





</head>



<body>

    <!-- Page Preloder -->

    <!--<div id="preloder">

        <div class="loader"></div>

    </div>-->

    <!-- Header Section Begin -->

    <?php include("header.php"); ?>

    <!-- Header End -->

    <!-- Contact Section Begin -->

    <section class="contact-section spad">

        <div class="container">

            <div class="row">

                <div class="col-lg-8 offset-lg-1" style="margin: 0 auto">

                    <div class="contact-form">

                        <h4>Completa el Formulario</h4>

                        <p>

                            Lamentamos profundamente que un conductor de Expreso Argentino VTC le haya causado algún inconveniente a usted u otra persona. Nos tomamos en serio el comportamiento de nuestros conductores e investigaremos cuidadosamente cada informe. Dicho esto, requerimos evidencia que muestre claramente a al conductor de Expreso Argentino VTC que infringe las reglas.</p>

                        <div id="errors" class="error col-lg-8"></div>

                        <form action="confirm.php" method="post" id="formulario" name="formulario" accept-charset="utf-8">

                            <div class="row">

                                <!--Text Name/Email/Edad/Numero-->

                                <div class="col-lg-5">

                                    <input type="text" id="NOMBRE" name="nombre" placeholder="Tu Nombre" required>

                                </div>

                                <div class="col-lg-5">

                                    <input type="text" id="EMAIL" name="email" placeholder="Tu Email" required>

                                </div>

                                <div class="col-lg-5">

                                    <input type="date" id="date" name="date" required>

                                </div>

                                <div class="col-lg-5">

                                    <input type="text" id="conductor" name="conductor" placeholder="Conductor o TMP ID" required>

                                </div>

                                <div class="col-lg-12">

                                    <select id="id_ban" name="select">

                                        <option value="0" selected>Servidor</option>

                                        <option value="1">Simulation 1</option>

                                        <option value="1">Simulation 2</option>

                                        <option value="1">[US] Simulation</option>

                                        <option value="1">[SGP] Simulation</option>

                                        <option value="1">ProMods</option>

                                    </select>



                                </div>

                                <div class="col-lg-12">

                                    <input type="text" id="prueba" name="prueba" placeholder="Link de Foto o Video de Prueba" required>

                                </div>

                                <div class="col-lg-12">

                                    <textarea id="motivo" placeholder="Comentanos el reporte"></textarea>

                                    <button type=submit" id="button" class="c-btn">Enviar Reporte</button>

                                    <p>Al dar click en "Enviar Reporte", Usted esta aceptando compartir los datos con Expreso Argentino VTC </p>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

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

</body>



</html>