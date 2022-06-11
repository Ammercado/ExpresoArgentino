<?php
require("libs/fetchTP.php");
?>

<html lang="en">

<head>  
    <meta charset="UTF-8">


<meta name="description" content="Expreso Argentino">
<meta name="keywords" content="Expreso Argentino, VTC, ETS2">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido | Expreso Argentino VTC</title>
    <link rel="icon" href="./Logo_EXP_ARG_nuevo.ico">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
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
    <script src="js/bootstrap.min.js"></script>
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
   <!-- <div id="preloder">
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
                        <div id="errors" class="error col-lg-8"></div>
                        <form action="confirm.php" method="post" id="formulario" name="formulario" accept-charset="utf-8">
                            <div class="row">
                                <!--Text Name/Email/Edad/Numero-->
                                <div class="col-lg-5">
                                    <input type="text" id="NOMBRE" name="nombre" placeholder="Nombre" required>
                                </div>
                                <div class="col-lg-5">
                                    <input type="text" id="EMAIL" name="email" placeholder="Email" required>
                                </div>
                                <div class="col-lg-5">
                                    <input type="number" id="EDAD" name="edad" placeholder="Edad" min="13" max="99" required>
                                </div>
                                <div class="col-lg-5">
                                    <input type="tel" id="NUMERO" name="numero" placeholder="N° Whatsapp" required>
                                </div>
                                <!--End Area datos personales-->
                                <hr style="border-color:#1f3b51;" width="25%">
                                <h4>Ahora te pedimos datos del juego</h4>
                                <hr style="border-color:#1f3b51;" width="25%">
                                <!--Datos del juego-->
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="sos" type="button" data-toggle="modal" data-target="#modalSTEAM">🆘</button>
                                        </div>
                                        <input type="text" id="STEAM" name="steam" class="form-control" placeholder="Ingrese Link de su perfil STEAM">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="sos" type="button" data-toggle="modal" data-target="#modalTMP">🆔</button>
                                        </div>
                                        <input type="text" id="TRUCKERSMP" name="truckersmp" class="form-control" placeholder="Ingrese su ID de TruckesMP">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="sos" type="button" data-toggle="modal" data-target="#modalTB">🆔</button>
                                        </div>
                                        <input type="text" id="TRUCKSBOOK" name="trucksbook" class="form-control" placeholder="Ingrese su ID de Trucksbook">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" id="TIEMPO" placeholder="Hace cuanto jugas" min="1">
                                        <div class="input-group-prepend">
                                            <select id=select name="select">
                                                <option value="HORAS" selected>Horas</option>
                                                <option value="DIAS">Dias</option>
                                                <option value="SEMANAS">Semanas</option>
                                                <option value="MESES">Meses</option>
                                                <option value="AÑOS">Años</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <script type="text/javascript">
                                        $(function() {
                                            $("#id_ban").change(function() {
                                                if ($(this).val() === "0") {
                                                    $("#id_input").prop("disabled", true);
                                                    $("#id_input").attr("placeholder", "Tuviste Algun Ban")
                                                } else {
                                                    $("#id_input").prop("disabled", false);
                                                    $("#id_input").attr("placeholder", "Cuantos").val("").focus().blur();
                                                }
                                            });
                                        });
                                    </script>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <select id="id_ban" name="select">
                                                <option value="0" selected>NO</option>
                                                <option value="1">SI</option>
                                            </select>
                                        </div>
                                        <input type="text" id="id_input" class="form-control" name="BAN" placeholder="Tuviste Algun Ban" disabled="disabled">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <script type="text/javascript">
                                        $(function() {
                                            $("#id_empresa").change(function() {
                                                if ($(this).val() === "0") {
                                                    $("#input").prop("disabled", true);
                                                    $("#input").attr("value", "NO");
                                                    $("#input").attr("placeholder", "Estuviste en alguna empresa")

                                                } else {
                                                    $("#input").prop("disabled", false);
                                                    $("#input").attr("placeholder", "Indicanos en cual").val("").focus().blur()
                                                }
                                            });
                                        });
                                    </script>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <select id="id_empresa" name="select">
                                                <option value="0" selected>NO</option>
                                                <option value="1">SI</option>
                                            </select>
                                        </div>
                                        <input type="text" id="input" class="form-control" name="HISTORIAL" placeholder="Estuviste en alguna empresa" disabled>
                                    </div>
                                </div>
                                <!--Edn datos juegos-->
                                <hr style="border-color:#1f3b51;" width="25%">
                                <h4>Casi terminamos</h4>
                                <hr style="border-color:#1f3b51;" width="25%">
                                <!--juegos adquiridos-->
                                <div class="col-lg-12">
                                    <table style="margin: 0 auto">
                                        <tr>
                                            <th>
                                                <p>Indicanos que juego tienes:</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox" id="myCheckbox1" value="1" />
                                                <label for="myCheckbox1"><img src="./img/form/logo.png" width="200px" alt="..." /></label>
                                            </td>
                                            <td>
                                                <input type="checkbox" id="myCheckbox8" value="1" />
                                                <label for="myCheckbox8"><img src="./img/form/ats_logo.webp" width="200px" alt="..." /></label>
                                            </td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                <p>Indicanos que DLC DE MAPAS TIENES:</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input name="ITALIA" type="checkbox" id="myCheckbox2" />
                                                <label for="myCheckbox2"><img src="./img/form/italia_trailer.jpg" width="200px" alt="..." /></label>
                                            </td>
                                            <td>
                                                <input name="NEWMEXICO" type="checkbox" id="myCheckbox9" />
                                                <label for="myCheckbox9"><img src="./img/form/nm_trailer.jpg" width="200px" alt="..." /></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input name="SCANDINAVIA" type="checkbox" id="myCheckbox3" />
                                                <label for="myCheckbox3"><img src="./img/form/scandinavia_trailer.jpg" width="200px" alt="..." /></label>
                                            </td>
                                            <td>
                                                <input name="OREGON" type="checkbox" id="myCheckbox10" />
                                                <label for="myCheckbox10"><img src="./img/form/or_trailer.jpg" width="200px" alt="..." /></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input name="BLACKSEA" type="checkbox" id="myCheckbox4" />
                                                <label for="myCheckbox4"><img src="./img/form/black_sea_trailer.jpg" width="200px" alt="..." /></label>
                                            </td>
                                            <td>
                                                <input name="UTAH" type="checkbox" id="myCheckbox11" />
                                                <label for="myCheckbox11"><img src="./img/form/ut_trailer.jpg" width="200px" alt="..." /></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input name="FRANCIA" type="checkbox" id="myCheckbox5" />
                                                <label for="myCheckbox5"><img src="./img/form/vive_la_france_trailer.jpg" width="200px" alt="..." /></label>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="WASHINGTON" id="myCheckbox12" />
                                                <label for="myCheckbox12"><img src="./img/form/wa_trailer.jpg" width="200px" alt="..." /></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input name="BALTICSEA" type="checkbox" id="myCheckbox6" />
                                                <label for="myCheckbox6"><img src="./img/form/balt_trailer.jpg" width="200px" alt="..." /></label>
                                            </td>
                                            <td>
                                                <input name="ARIZONA" type="checkbox" id="myCheckbox13" />
                                                <label for="myCheckbox13"><img src="./img/form/arizona_trailer.jpg" width="200px" alt="..." /></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input name="GOINGEAST" type="checkbox" id="myCheckbox7" />
                                                <label for="myCheckbox7"><img src="./img/form/going-east.jpg" width="200px" alt="..." /></label>
                                            </td>

                                        </tr>
                                    </table>
                                </div>
                                <!---En juegos adquiridos-->
                                <hr style="border-color:#1f3b51;" width="25%">
                                <h4>Te pedimos un poco mas de tiempo</h4>
                                <hr style="border-color:#1f3b51;" width="25%">
                                <div class="col-lg-12">
                                    <textarea id="motivo" placeholder="Comentanos tu motivo para ingresar a la empresa"></textarea>
                                    <button type=submit" id="button" class="c-btn">Enviar</button>

                                    <p>Al dar click en "Enviar Solicitud", Usted esta aceptando nuestras <a href="./privacy.php" target="_blank"> Politicas de Privacidad</a> y <a href="./term.php" target="_blank"> Terminos & Condiciones </a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal trucksbook-->
    <div class="modal fade" id="modalTB" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">TrucksBook Ayuda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <li>Debes tenes una cuenta en <a href="https://trucksbook.eu/" target="_bank">https://trucksbook.eu/</a></li>
                    <li>Copiar su numero de ID</li>
                    <img src="img/form/codtrubook.png" />
                    <li>Pegar numero en nuestro formulario</li>
                    <img src="img/form/codtrubookej.png" />
                </div>
            </div>
        </div>
    </div>
    <!--Modal TruckersMp-->
    <div class="modal fade" id="modalTMP" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">TruckersMP Ayuda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <li>Debes tenes una cuenta en <a href="https://truckersmp.com/" target="_bank">https://truckersmp.com/</a></li>
                    <li>Debe dirigirse a su perfil</li>
                    <img src="img/form/codtruckersmp.png" />
                    <li>Copiar su numero de ID</li>
                    <img src="img/form/codtruckersmp2.png" />
                    <li>Pegar numero en nuestro formulario</li>
                    <img src="img/form/codtruckersmpej.png" />
                </div>
            </div>
        </div>
    </div>
    <!--Modal STEAM-->
    <div class="modal fade" id="modalSTEAM" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">STEAM Ayuda</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <li>Steam tiene diferentes formas de averiguar el Link de Perfil, aca se le explicara de una forma.</li>
                    <li>Debe ingresar a <a href="https://steamcommunity.com/login" target="_bank">https://steamcommunity.com/login</a></li>
                    <li>Debe ingresar a su perfil</li>
                    <li>Copiar link</li>
                    <img src="img/form/steam1.png" />
                    <li>STEAM TIENE 2 FORMAS DE DAR EL LINK <i>https://steamcommunity.com/profiles/{NUMEROS}</i> y <i>https://steamcommunity.com/id/{NOMBRE}</i></br><b>ambas son aceptadas</b></li>
                    <li>Pegar numero en nuestro formulario</li>
                    <img src="img/form/steam2.png" />
                </div>
            </div>
        </div>
    </div>
    <!--Modal Comprobar-->
    <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div id="reciboPDF">
                    <table class="recibo-table" style="max-width:600px;">
                        <tr class="recibo-ruler">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="recibo-header">
                            <td colspan="10">Formulario de Solicitud - Expreso Argentino VTC</td>
                        </tr>
                        <tr style="font-size:6px;">
                            <td colspan="10" style="border:none;">&nbsp;</td>
                        </tr>
                        <tr style="margin-top:5px; font-size:9px; font-weight:bold;">
                            <td colspan="3" style="text-align:center;">NOMBRE</td>
                            <td colspan="3" style="text-align:center;">EDAD</td>
                            <td colspan="3" style="text-align:center;">NUMERO</td>
                            <td colspan="3" style="text-align:center;">EMAIL</td>
                        </tr>
                        <tr style="margin-top:5px;font-size:13px;font-weight:bold;">
                            <td colspan="3" id="nom" style="border-top:none;text-align:center;padding:10px 0 10px 20px;"></td>
                            <td colspan="3" id="ed" style="border-top:none;text-align:center;padding:10px;"></td>
                            <td colspan="3" id="num" style="border-top:none;text-align:center;padding:10px;">/td>
                            <td colspan="3" id="co" style="border-top:none;text-align:center;padding:10px 0 10px 20px;"></td>
                        </tr>
                        <tr style="font-size:6px;">
                            <td colspan="10" style="border:none;">&nbsp;</td>
                        </tr>
                        <tr style="margin-top:5px; font-size:9px; font-weight:bold;">
                            <td colspan="3" style="text-align:center;">TIEMPO DE JUEGO</td>
                            <td colspan="3" style="text-align:center;">BAN</td>
                            <td colspan="6" style="text-align:center;">Empresas</td>
                        </tr>
                        <tr style="margin-top:5px;font-size:13px;font-weight:bold;">
                            <td colspan="3" id="tie" style="border-top:none;text-align:center;padding:10px 0 10px 20px;">-</td>
                            <td colspan="3" id="ban" style="border-top:none;text-align:center;padding:10px;">-</td>
                            <td colspan="6" id="emp" style="border-top:none;text-align:center;padding:10px;">-</td>
                        </tr>
                        <tr style="font-size:7px;">
                            <td colspan="10" style="border:none;">&nbsp;</td>
                        </tr>
                        <tr style="margin-top:5px; font-size:9px; font-weight:bold;">
                            <td colspan="4" style="text-align:center;">STEAM </td>
                            <td colspan="4" style="text-align:center;">TRUCKERSMP</td>
                            <td colspan="4" style="text-align:center;">TRUCKSBOOK</td>
                        </tr>
                        <tr style="margin-top:5px;font-size:13px;font-weight:bold;">
                            <td colspan="4" id="st" style="font-size:11px;"></td>
                            <td colspan="4" id="tm" style="font-size:11px;"></td>
                            <td colspan="4" id="tb" style="border-spacing:3px;font-size:11px;"></td>
                        </tr>
                        <tr style="font-size:7px;">
                            <td colspan="10" style="border:none;">&nbsp;</td>
                        </tr>

                        <tr style="margin-top:5px; font-size:10px; font-weight:bold;">
                            <td colspan="10">
                                <table class="recibo-table" style="width:100%;">
                                    <tr class="recibo-ruler">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:bold;">
                                        <td colspan="5" style="border:none;text-align:center;">Juego</td>
                                        <td colspan="5" style="border:none;text-align:center;">Tipo</td>
                                        <td colspan="5" style="border:none;text-align:center;">Estado</td>
                                    </tr>
                                    <tr style="font-size:7px;">
                                        <td colspan="10" style="border:none;">&nbsp;</td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">Euro Truck Simulator 2</td>
                                        <td colspan="5" style="border:none;text-align:left;">Juego base</td>
                                        <td colspan="5" id="ets2" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">American Truck Simulator</td>
                                        <td colspan="5" style="border:none;text-align:left;">Juego Base</td>
                                        <td colspan="5" id="ats" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">Going East</td>
                                        <td colspan="5" style="border:none;text-align:left;">DLC</td>
                                        <td colspan="5" id="goinge" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">Scandinavia</td>
                                        <td colspan="5" style="border:none;text-align:left;">DLC</td>
                                        <td colspan="5" id="sca" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">Vive la France!</td>
                                        <td colspan="5" style="border:none;text-align:left;">DLC</td>
                                        <td colspan="5" id="fra" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">Italia</td>
                                        <td colspan="5" style="border:none;text-align:left;">DLC</td>
                                        <td colspan="5" id="ita" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">Beyond The Baltic Sea</td>
                                        <td colspan="5" style="border:none;text-align:left;">DLC</td>
                                        <td colspan="5" id="bl" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">Road to the Black Sea</td>
                                        <td colspan="5" style="border:none;text-align:left;">DLC</td>
                                        <td colspan="5" id="blacksea" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <!--DLC AMERICAN-->
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">Arizona</td>
                                        <td colspan="5" style="border:none;text-align:left;">DLC</td>
                                        <td colspan="5" id="ari" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">New Mexico</td>
                                        <td colspan="5" style="border:none;text-align:left;">DLC</td>
                                        <td colspan="5" id="new" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">Oregon</td>
                                        <td colspan="5" style="border:none;text-align:left;">DLC</td>
                                        <td colspan="5" id="ore" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">Utah</td>
                                        <td colspan="5" style="border:none;text-align:left;">DLC</td>
                                        <td colspan="5" id="uta" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <tr style="margin-top:5px; font-size:13px; font-weight:normal;">
                                        <td colspan="5" style="border:none;text-align:left;">Washington</td>
                                        <td colspan="5" style="border:none;text-align:left;">DLC</td>
                                        <td colspan="5" id="wash" style="border:none;text-align:right;">-</td>
                                    </tr>
                                    <tr style="font-size:7px;">
                                        <td colspan="10" style="border:none;height:30px;">&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr style="font-size:7px;">
                        <tr style="margin-top:5px;font-size:13px;font-weight:bold;">
                            <td colspan="10" id="mo" style="border-top:none;text-align:left;padding:10px 0 10px 20px;">Motivo de ingreso</td>
                        </tr>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6 text-center m-3">
                    <button type=submit" id="confirmar" class="c-btn">Confirmar</button>
                    <button type=submit" id="modificar" class="c-btn">Modificar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="col-lg-12 text-center">
            <div class="footer-logo-item">
                <div class="social-links">
                    <!--<?php getWebs(); ?>-->
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

    <script>
        $("#a").css("display", "none");
        const scriptURL = 'https://script.google.com/macros/s/AKfycbzU3KFdvEG-1JVx7fZASkUCy09D80ROiY3UJ9t12-QquEIlbZI/exec'
        const data = new FormData();
        var nombre, email,
            edad, numero,
            steam, truckersmp,
            trucksbook, ban,
            antiguedad, tiempo,
            motivo, ets2, ats, ge, scan, vf, it, tbl, bal, scan, ar, nm, or, ut, wa;
        var fourdigitsrandom = Math.floor(100000 + Math.random() * 900000);
        data.append('CODIGO', fourdigitsrandom);
        $("#a").val(fourdigitsrandom);
        $(document).ready(function() {
            //Validamos los campos
            $("form[name='formulario']").validate({
                errorClass: "error",
                validClass: "valid",
                rules: {
                    nombre: {
                        required: true,
                        minlength: 2,
                    },
                    edad: {
                        required: true,
                        number: true,
                        min: 13
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    steam: {
                        required: true,
                        minlength: 27,
                    },
                    truckersmp: {
                        required: true,
                        number: true,
                        minlength: 1,
                    },
                    trucksbook: {
                        required: true,
                        number: true,
                        minlength: 1,
                    },
                    motivo: {
                        required: true,
                        minlength: 10,
                    },
                },
                messages: {
                    nombre: "Porfavor ingrese un Nombre valido",
                    email: "Porfavor ingrese un email valido",
                    edad: "La edad minima permitida es de 13 años",
                    steam: "Link Steam incorrecto, Porfavor chequea 🆘 ",
                    truckersmp: "Numero de TruckersMP incorrecto, Porfavor chequea 🆔",
                    trucksbook: "Numero de TrucksBook incorrecto, Porfavor chequea 🆔",
                    motivo: "Por favor Comentando con un minimo de 10 caracteres tus motivos",
                },
                highlight: function(label) {
                    $(label).closest('.control-group').addClass('error');
                },
                errorLabelContainer: '#errors',
                wrapper: 'li',
                submitHandler: function(form) {
                    $("#myModal").attr('data-target', '#myModal');
                    $('#myModal').modal({
                        show: true,
                        keyboard: false,
                        backdrop: 'static'
                    })
                }
            });
            //Boton para modificar el formulario
            $("#modificar").click(function() {
                $('#myModal').modal('hide');
            });
            // tomamos los valores //
            /*Tomamos los datos personales*/
            $("#NOMBRE").on('change', function() {
                var name = $(this).val();
                nombre = name;
                $("#nom").html(nombre);
                data.append('NOMBRE', nombre);
            });
            $('#EDAD').on('change', function() {
                var ed = $(this).val();
                edad = ed;
                $("#ed").html(edad);
                data.append('EDAD', edad);
            });
            $("#EMAIL").on('change', function() {
                var em = $(this).val();
                email = em;
                $("#co").html(email);
                data.append('EMAIL', email);

            });
            $("#NUMERO").on('change', function() {
                var nu = $(this).val();
                numero = nu;
                $("#num").html(numero);
                data.append('NUMERO', numero);

            });
            /*DATOS DE TIEMPO Y BAN*/
            /*Tomamos el tiempo de juego*/
            $("#TIEMPO").change(function() {
                $focus = $('input[id=TIEMPO').val();
                $tiempo = $("select[id=select]").val();
                $juego = $focus
                tiempo = $focus + ' ' + $tiempo;
                $("#tie").html(tiempo);
                data.append('TIEMPO', tiempo);
                //data.append('TIEMPO', $t)
            });
            $("#select").change(function() {
                $juego = $('input[id=TIEMPO').val();
                tiempo = $juego + ' ' + $(this).val();
                $("#tie").html(tiempo);
                data.append('TIEMPO', tiempo);

                //data.append('TIEMPO', $t)
            });
            /*INPUT BAN*/
            $("#id_input").on('change', function() {
                var bn = $(this).val();
                ban = bn;
                $("#ban").html(ban);
                data.append('BAN', ban);

            });
            /*Input Historial*/
            $("#input").on('change', function() {
                var emp = $(this).val();
                antiguedad = emp;
                $("#emp").html(antiguedad);
                data.append('HISTORIAL', antiguedad);

            });
            /*DATOS DEL JUEGO*/
            $("#STEAM").on('change', function() {
                var st = $(this).val();
                steam = st;
                $("#st").html(steam);
                data.append('STEAM', steam);

            });
            $("#TRUCKERSMP").on('change', function() {
                var tr = $(this).val();
                truckersmp = 'https://truckersmp.com/user/' + tr;
                $("#tm").html(truckersmp);
                data.append('TRUCKERSMP', truckersmp);

            });
            $("#TRUCKSBOOK").on('change', function() {
                var tb = $(this).val();
                trucksbook = 'https://trucksbook.eu/profile/' + tb;
                $("#tb").html(trucksbook);
                data.append('TRUCKSBOOK', trucksbook);

            });
            /*Comprobamos Juego Base*/
            $("#myCheckbox1").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var ets = $(this).val();
                    ets2 = ets
                    $("#ets2").html(ets2);
                    data.append('ETS2', ets2);

                } else {
                    $(this).attr('value', 'NO');
                    var ets = $(this).val();
                    ets2 = ets
                    $("#ets2").html(ets2);
                    data.append('ETS2', ets2);
                }
            });
            $("#myCheckbox8").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var ats2 = $(this).val();
                    ats = ats2
                    $("#ats").html(ats);
                    data.append('ATS', ats);

                } else {
                    $(this).attr('value', 'NO');
                    var ats2 = $(this).val();
                    ats = ats2
                    $("#ats").html(ats);
                    data.append('ATS', ats);

                }
            });
            /*Comprobamos DLC EURO TRUCK SIMULATOR */
            $("#myCheckbox7").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var goes = $(this).val();
                    ge = goes
                    $("#goinge").html(ge);
                    data.append('GOINGEAST', ge);

                } else {
                    $(this).attr('value', 'NO');
                    var goes = $(this).val();
                    ge = goes
                    $("#goinge").html(ge);
                    data.append('GOINGEAST', ge);

                }
            });
            $("#myCheckbox3").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var sca = $(this).val();
                    scan = sca
                    $("#sca").html(scan);
                    data.append('SCANDINAVIA', scan);
                } else {
                    $(this).attr('value', 'NO');
                    var sca = $(this).val();
                    scan = sca
                    $("#sca").html(scan);
                    data.append('SCANDINAVIA', scan);
                }
            });
            $("#myCheckbox5").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var fra = $(this).val();
                    vf = fra
                    $("#fra").html(vf);
                    data.append('FRANCIA', vf);

                } else {
                    $(this).attr('value', 'NO');
                    var fra = $(this).val();
                    vf = fra
                    $("#fra").html(vf);
                    data.append('FRANCIA', vf);

                }
            });
            $("#myCheckbox2").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var ita = $(this).val();
                    it = ita
                    $("#ita").html(it);
                    data.append('ITALIA', it);

                } else {
                    $(this).attr('value', 'NO');
                    var ita = $(this).val();
                    it = ita
                    $("#ita").html(it);
                    data.append('ITALIA', it);

                }
            });
            $("#myCheckbox6").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var bl = $(this).val();
                    bal = bl
                    $("#bl").html(bal);
                    data.append('BALTICSEA', bal);
                } else {
                    $(this).attr('value', 'NO');
                    var bl = $(this).val();
                    bal = bl
                    $("#bl").html(bal);
                    data.append('BALTICSEA', bal);
                }
            });
            $("#myCheckbox4").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var black = $(this).val();
                    tbl = black
                    $("#blacksea").html(tbl);
                    data.append('BLACKSEA', tbl);
                } else {
                    $(this).attr('value', 'NO');
                    var black = $(this).val();
                    tbl = black
                    $("#blacksea").html(tbl);
                    data.append('BLACKSEA', tbl);
                }
            });
            /*Comprobamos DLC American*/
            $("#myCheckbox13").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var arizona = $(this).val();
                    ar = arizona
                    $("#ari").html(ar);
                    data.append('ARIZONA', ar);
                } else {
                    $(this).attr('value', 'NO');
                    var arizona = $(this).val();
                    ar = arizona
                    $("#ari").html(ar);
                    data.append('ARIZONA', ar);
                }
            });
            $("#myCheckbox9").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var mexico = $(this).val();
                    nm = mexico
                    $("#new").html(nm);
                    data.append('NEWMEXICO', nm);
                } else {
                    $(this).attr('value', 'NO');
                    var mexico = $(this).val();
                    nm = mexico
                    $("#new").html(nm);
                    data.append('NEWMEXICO', nm);
                }
            });
            $("#myCheckbox10").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var oregon = $(this).val();
                    or = oregon
                    $("#ore").html(or);
                    data.append('OREGON', or);
                } else {
                    $(this).attr('value', 'NO');
                    var oregon = $(this).val();
                    or = oregon
                    $("#ore").html(or);
                    data.append('OREGON', or);
                }
            });
            $("#myCheckbox11").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var utah = $(this).val();
                    ut = utah
                    $("#uta").html(ut);
                    data.append('UTAH', ut);
                } else {
                    $(this).attr('value', 'NO');
                    var utah = $(this).val();
                    ut = utah
                    $("#uta").html(ut);
                    data.append('UTAH', ut);
                }
            });
            $("#myCheckbox12").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'SI');
                    var wash = $(this).val();
                    wa = wash
                    $("#wash").html(wa);
                    data.append('WASHINGTON', wa);
                } else {
                    $(this).attr('value', 'NO');
                    var wash = $(this).val();
                    wa = wash
                    $("#wash").html(wa);
                    data.append('WASHINGTON', wa);
                }
            });
            /* Vemos el motivo*/
            $("#motivo").on('change', function() {
                var mot = $(this).val();
                motivo = mot;
                $("#mo").html(motivo);
                data.append('MOTIVO', motivo);
            });

            /*preparamos para el envio de datos*/
            $("#confirmar").click(function() {
                fetch(scriptURL, {method: 'POST',body: data})
                    .then(
                         response =>{
                             location.href ="./confirm.php?w1=" + fourdigitsrandom,
                             $("#formulario")[0].reset();
                             
                             }
                        )
                    .catch(error => console.error('Error!', error.message))
            });
        });
    </script>
</body>

</html>