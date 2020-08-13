<?php
require("libs/fetch_data.php");
include("libs/fetchTP.php");
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="euc-jp">

    <meta name="description" content="Expreso Argentino">
    <meta name="keywords" content="Expreso Argentino, VTC, ETS2">
    <meta name="viewport" content="width=device-width, initial-scale=1.1">
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
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div id="loader-wrapper">
            <div class="loader">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="subline"></div>
                <div class="subline"></div>
                <div class="subline"></div>
                <div class="subline"></div>
                <div class="subline"></div>
                <div class="loader-circle-1">
                    <div class="loader-circle-2"></div>
                </div>
                <div class="needle"></div>
                <div class="loading">Entrando</div>
            </div>
        </div>
    </div>
    <!-- Header Section Begin -->
    <!-- Header Section Begin -->
    <?php
    include("header.php");
    ?>
    <!-- Header End -->
    <section class="banner set-bg" data-setbg="<?php getInicio() ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner__info">
                        <h1 class="banner__title texto-borde at-item">Haciendo lo que nos gusta</h1>
                        <a href=./postulacion class="primary-btn">UNIRME</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recommender Section -->
    <section class="cta-section">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-7 m-auto text-center texto-borde">
                        <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                            <h2>Ultimas Noticias</h2>
                        </div>
                    </div>
            </div>
        </div>
    </section>
   
    <!-- Hero End -->

    <!-- Testimonial Section End -->
    <!-- herramientas Section Begin -->
    <section class="news-section">
        <div class="container-fluid">
            <div class="row">
                <?php getNews() ?>
            </div>
        </div>
    </section>

    <!-- herramientas Section End -->
    <!-- news Section Begin 
    <section class="testimonial-section set-bg spad" data-setbg="<?php getNoticias() ?>">
        <div class="class-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                            <h2>Noticias</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonial-slider owl-carousel">
                        <?php getNews() ?>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- pruebas Section Begin -->
    <section class="classes-section">
        <div class="class-title set-bg" data-setbg="img/classes-title-bg.jpg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                            <h2 class="texto-borde">Unite a la familia</h2>
                            <p>En expreso argentino le realizamos una prueba de manejo a los ingresantes para evaluar su comportamiento en ruta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/Adelantamiento.png">
                        <a type="button" class="primary-btn class-btn" data-toggle="modal" data-target="#modelId">
                            Adelantamiento
                        </a>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/reflejos.png">
                        <a type="button" class="primary-btn class-btn" data-toggle="modal" data-target="#modelId2">
                            Reflejos
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/frenado.png">
                        <a type="button" class="primary-btn class-btn" data-toggle="modal" data-target="#modelId3">
                            Frenado
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="classes-item set-bg" data-setbg="img/classes/frenado2.png">
                        <a type="button" class="primary-btn class-btn" data-toggle="modal" data-target="#modelId4">
                            Estacionamiento
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Modales de Prueba-->
    <!-- Modal Adelantamiento-->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Adelantamiento - Explicacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        Los reclutadores deberán mantener una cierta velocidad mínima, llegado un punto el recluta deberá aumentar su velocidad y sobrepasarlo, colocándose en el mismo carril, usando las indicaciones pedidas por el encargado de tomar la prueba de manejo.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Reflejos-->
    <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reflejos - Explicacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        Se deberá mantener una velocidad constante indicada por el reclutador, y llegado a un punto, el encargado de tomar la prueba de manejo intentara colisionar con el recluta mientras que el mismo deberá esquivarlo.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Frenado-->
    <div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId3" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Frenado - Explicacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        Se deberá mantener una velocidad constante indicada por el reclutador, y llegado a un punto el encargado de tomar la prueba de manejo frenara bruscamente a una distancia cercana del recluta, donde deberá frenar sin esquivarlo.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal Estacionamiento-->
    <div class="modal fade" id="modelId4" tabindex="-1" role="dialog" aria-labelledby="modelTitleId4" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Estacionamiento - Explicacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        En un área determinada ( elegida en el momento) un camión se colocara atrás del recluta y otro camión adelante, donde tendrá que salir de su ubicación colocándose a la par del camión de adelante.

                        Luego de eso, deberá volver a su posición inicial, dando reversa y colocándose como lo pida el reclutador que le este tomando la prueba de manejo.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
    </script>
    <!-- pruebas Section Begin -->
    <!-- Herramientas title Section -->
    <section class="cta-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-text">
                        <h2>Herramientas Necesarias</h2>
                        <p>En expreso argentino implementamos el uso de las siguientes herramientas para lograr una buena comunidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- herramientas Section Begin -->
    <section class="chooseus-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="https://cdn.discordapp.com/attachments/696794001042571286/735366562881732678/discord-axtin.png" alt="">
                        <h5>Discord</h5>
                        <p>Contamos con nuestro servidor propio para mantener una comunicacion.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="https://cdn.discordapp.com/attachments/696794001042571286/735370380663062588/pala-axtin.png" alt="">
                        <h5>Virtual Speditor</h5>
                        <p>Utilizamos un programa para generar cargas de manera simple y rapida.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="https://cdn.discordapp.com/attachments/696794001042571286/735370392365170718/camion-axtin.png" alt="">
                        <h5>Pintura personalizada</h5>
                        <p>Contamos con un mod de pintura exclusivo para miembros.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="https://cdn.discordapp.com/attachments/696794001042571286/735370397536747520/trucksbook-axtin.png" alt="" width="72px">
                        <h5>TrucksBook</h5>
                        <p>Utilizamos un registro de los kilometros recorridos por nuestro miembro durante el mes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="https://cdn.discordapp.com/attachments/696794001042571286/735370394399145994/Truckersmp-axtin.png" alt="" width="72px">
                        <h5>VTC TruckersMP</h5>
                        <p>Somos una Virtual Company de TruckersMP </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="https://cdn.discordapp.com/attachments/696794001042571286/735370400984203274/calendario-axtin.png" alt="">
                        <h5>Eventos</h5>
                        <p>Participamos de Eventos publicos y privados. Aseguramos 2 convoys por semanas. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- herramientas Section End -->

    <section class="classes-section">
        <div class="class-title set-bg" data-setbg="img/classes-title-bg.jpg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="section-title pl-lg-4 pr-lg-4 pl-0 pr-0">
                            <h2>¿Todavia no te Uniste?</h2>
                        </div>
                        <a href="./postulacion.php" class="primary-btn class-btn">Unirme</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cookieConsent" class="cookies">
        Utilizamos cookies para asegurar que damos la mejor experiencia al usuario en nuestra web. Si sigues utilizando este sitio asumiremos que estás de acuerdo.
        <button class="cookieConsentOK cookies__boton cookies__boton--si">Cerrar</button>
    </section>

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', () => {

            let cookies = () => {
                //======================================================================
                // COOKIES
                //======================================================================

                //-----------------------------------------------------
                // Variables
                //-----------------------------------------------------
                let seccionCookie = document.querySelector('section.cookies');
                let cookieSi = document.querySelector('.cookies__boton--si');

                //-----------------------------------------------------
                // Funciones
                //-----------------------------------------------------

                /**
                 * Método que oculta la sección de Cookie para siempre
                 */
                function ocultarCookie() {
                    // Borra la sección de cookies en el HTML
                    seccionCookie.remove();
                }

                /**
                 * Método que marca las cookies como aceptadas
                 */
                function aceptarCookies() {
                    // Oculta el HTML de cookies
                    ocultarCookie();
                    // Guarda que ha aceptado
                    localStorage.setItem('cookie', true);
                    // Tu codigo a ejecutar si aceptan las cookies
                    ejecutarSiAcepta();
                }

                /**
                 * Método que ejecuta tu código si aceptan las cookies
                 */
                function ejecutarSiAcepta() {
                    /////////////////// Tu código ////////////////
                    ////////////  ¿Google Analítics? /////////////
                }

                /**
                 * Método que inicia la lógica
                 */
                function iniciar() {
                    // Comprueba si en el pasado el usuario ha marcado una opción
                    if (localStorage.getItem('cookie') !== null) {
                        if (localStorage.getItem('cookie') === 'true') {
                            // Aceptó
                            aceptarCookies();
                        } else {
                            // No aceptó
                            denegarCookies();
                        }
                    }
                }

                //-----------------------------------------------------
                // Eventos
                //-----------------------------------------------------
                cookieSi.addEventListener('click', aceptarCookies, false);

                return {
                    iniciar: iniciar
                }
            }

            // Activa el código. Comenta si quieres desactivarlo.
            cookies().iniciar();

        });
    </script>

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="col-lg-12 text-center">
            <div class="footer-logo-item">
                <div class="social-links">
                    <?php getWebs(); ?>
                </div>
                <a href="./privacy" style="color:#FFFFFF" target="_blank">Politica y Privacidad</a> | 
                <a href="./term" style="color:#FFFFFF" target="_blank">Terminos de Servicios</a>
            </div>
        </div>
        <div class=" copyright-text">
            <div class="container-fluid">
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
</html>