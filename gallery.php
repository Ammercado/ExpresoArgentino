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

    <title>Multimedia | Expreso Argentino VTC</title>

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

    <link rel="stylesheet" href="css/style.css?v=<?=time();?>" type="text/css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">

</head>



<body>

    <!-- Header Section Begin -->

    <!-- Header Section Begin -->

    <?php

    include("header.php")

    ?>

    <!-- Header End -->



    <!-- Breadcrumb Section Begin -->

    <section class="breadcrumb-section set-bg spad" data-setbg="">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="breadcrumb-text">

                        <h2>Galeria</h2>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="gallery-section spad">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="gallery-controls">

                        <ul>

                            <li class="active" data-filter="*">Todos</li>

                            <li data-filter=".interno">Convoy Interno</li>

                            <li data-filter=".multi-empresa">Convoy Multi-Empresa</li>

                            <li data-filter=".internacionales">Internacionales</li>

                            <li data-filter=".rutas">Rutas</li>

                        </ul>

                    </div>

                </div>

            </div>

            <div class="row gallery-filter">

                <?php getGalerry() ?>

            </div>

        </div>

    </section>

    <!-- Breadcrumb End -->



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

</body>



</html>