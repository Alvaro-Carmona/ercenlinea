
<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>ERC GLOBAL MARKETS| Home</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Farm Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="icon" href="vistas/img/log3.png">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //custom-theme -->
    <link rel="stylesheet" href="vistas/css/jquery-ui.css" />
    <link href="vistas/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="vistas/css/diseno.css" rel="stylesheet" type="text/css" media="all" />
    <link href="vistas/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="vistas/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />

    <script type="text/javascript" src="vistas/js/jquery-2.1.4.min.js"></script>
    <!-- //custom-theme -->
    <script type="text/javascript" src="vistas/js/megamenu.js"></script>
    <script>
        $(document).ready(function() {
            $(".megamenu").megamenu();
        });
    </script>
    <!-- font-awesome-icons -->
    <script src="vistas/js/menu_jquery.js"></script>
    <link href="vistas/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,900&display=swap" rel="stylesheet">
<!-- FILE UPLODES -->
<link href="vistas/plugins/fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css" />

    <link href="vistas/css/sweetalert.css" rel="stylesheet">
<script src="vistas/js/sweetalert.min.js"></script>


</head>

<body>
    <?php
$rutas = array();
$ruta = null;
$infoProducto = null;


$rutas = explode("/", $_GET["ruta"]);

$item = "ruta";
$valor =  $rutas[0];

   
    if ($_COOKIE["idioma"] == "en") {
   

        echo '<div class="banner_top " id="home">
        ';

        include "modulos/menu_en.php";
        echo ' </div>';
     if ($rutas[0] == "envio-correo") {
        include "paginas/envio-correo.php";
    }
        else if ($rutas[0] == "about-erc") {
            include "paginas_en/about-erc.php";
        } else if ($rutas[0] == "academy") {
            include "paginas_en/academy.php";
        } else if ($rutas[0] == "autochartist") {
            include "paginas_en/autocharist.php";
        } else if ($rutas[0] == "banking-license") {
            include "paginas_en/banking-license.php";
        } else if ($rutas[0] == "cfds-platform") {
            include "paginas_en/cfds-platform.php";
        } else if ($rutas[0] == "cfds") {
            include "paginas_en/cfds.php";
        } else if ($rutas[0] == "contact") {
            include "paginas_en/contact.php";
        } else if ($rutas[0] == "courses.php") {
            include "paginas_en/courses.php";
        } else if ($rutas[0] == "cripto-currency") {
            include "paginas_en/cripto-currency.php";
        } else if ($rutas[0] == "cripto-platform") {
            include "paginas_en/cripto-platform.php";
        } else if ($rutas[0] == "deposits-withdraw") {
            include "paginas_en/deposits-withdraw.php";
        } else if ($rutas[0] == "description-estandar") {
            include "paginas_en/description-estandar.php";
        } else if ($rutas[0] == "description-premium") {
            include "paginas_en/description-premium.php";
        } else if ($rutas[0] == "description-professional") {
            include "paginas_en/description-professional.php";
        } else if ($rutas[0] == "e-books") {
            include "paginas_en/e-books.php";
        } else if ($rutas[0] == "erc-accounts") {
            include "paginas_en/erc-accounts.php";
        } else if ($rutas[0] == "events-and-webinars") {
            include "paginas_en/events-and-webinars.php";
        } else if ($rutas[0] == "erc-buiness") {
            include "paginas_en/erc-buiness.php";
        } else if ($rutas[0] == "erc-signal") {
            include "paginas_en/erc-signal.php";
        } else if ($rutas[0] == "standar-acount") {
            include "paginas_en/standar-acount.php";
        } else if ($rutas[0] == "forex") {
            include "paginas_en/forex.php";
        } else if ($rutas[0] == "general-business-terms") {
            include "paginas_en/general-business-terms.php";
        } else if ($rutas[0] == "general-charges") {
            include "paginas_en/general-charges.php";
        } else if ($rutas[0] == "hedge-fund-account") {
            include "paginas_en/hedge-fund-account.php";
        } else if ($rutas[0] == "hedge-fund") {
            include "paginas_en/hedge-fund.php";
        } else if ($rutas[0] == "how-to-use-cfd") {
            include "paginas_en/how-to-use-cfd.php";
        } else if ($rutas[0] == "how-to-use-cripto") {
            include "paginas_en/how-to-use-cripto.php";
        } else if ($rutas[0] == "how-to-use-nft") {
            include "paginas_en/how-to-use-nft.php";
        } else if ($rutas[0] == "introduction-cfd") {
            include "paginas_en/introduction-cfd.php";
        } else if ($rutas[0] == "introduction-crypto") {
            include "paginas_en/introduction-crypto.php";
        } else if ($rutas[0] == "introduction-nft") {
            include "paginas_en/introduction-nft.php";
        } else if ($rutas[0] == "margin-information") {
            include "paginas_en/margin-information.php";
        } else if ($rutas[0] == "mt4") {
            include "paginas_en/mt4.php";
        } else if ($rutas[0] == "nft-platform") {
            include "paginas_en/nft-platform.php";
        } else if ($rutas[0] == "pricing-professional") {
            include "paginas_en/pricing-professional.php";
        } else if ($rutas[0] == "pricing-overview") {
            include "paginas_en/pricing-overview.php";
        } else if ($rutas[0] == "protection-funds") {
            include "paginas_en/protection-funds.php";
        } else if ($rutas[0] == "raw-material") {
            include "paginas_en/raw-material.php";
        } else if ($rutas[0] == "refer-friends") {
            include "paginas_en/refer-friends.php";
        } else if ($rutas[0] == "register") {
            include "paginas_en/register.php";
        } else if ($rutas[0] == "risk-warning") {
            include "paginas_en/risk-warning.php";
        } else if ($rutas[0] == "stock-indice") {
            include "paginas_en/stock-indice.php";
        } else if ($rutas[0] == "support") {
            include "paginas_en/support.php";
        } else if ($rutas[0] == "trader-calculator") {
            include "paginas_en/trader-calculator.php";
        } else if ($rutas[0] == "tranding-central") {
            include "paginas_en/tranding-central.php";
        } else if ($rutas[0] == "trading-conditions") {
            include "paginas_en/trading-conditions.php";
        } else if ($rutas[0] == "tabla-general") {
            include "paginas_en/tabla-general.php";
        } else if ($rutas[0] == "trading-tools") {
            include "paginas_en/trading-tools.php";
        } else if ($rutas[0] == "vip-account") {
            include "paginas_en/vip-account.php";
        } else if ($rutas[0] == "visual-demo-cfd") {
            include "paginas_en/visual-demo-cfd.php";
        } else if ($rutas[0] == "visual-demo-crypto") {
            include "paginas_en/visual-demo-crypto.php";
        } else if ($rutas[0] == "visual-demo-ft") {
            include "paginas_en/visual-demo-ft.php";
        } else {

            include "modulos/slide.php";

            include "modulos/herramientas-en.php";
            include "modulos/inversion-en.php";
        }



        include "modulos/footer-en.php";
    } else  if ($_COOKIE["idioma"] == "es") {


        echo '<div class="banner_top " id="home">
        ';

        include "modulos/menu.php";
        
        echo ' </div>';
        if ($rutas[0] == "autochartist") {
            include "paginas/autochartist.php";
        }else if ($rutas[0] == "envio-correo") {
            include "paginas/envio-correo.php";
        } else if ($rutas[0] == "calculadora-trader") {
            include "paginas/calculadora-trader.php";
        } else if ($rutas[0] == "cargos-generales") {
            include "paginas/cargos-generales.php";
        } else if ($rutas[0] == "cfd") {
            include "paginas/cfd.php";
        } else if ($rutas[0] == "comisiones-profecional") {
            include "paginas/comisiones-profecional.php";
        } else if ($rutas[0] == "comisiones") {
            include "paginas/comisiones.php";
        } else if ($rutas[0] == "como-usarla-cfd") {
            include "paginas/como-usarla-cfd.php";
        } else if ($rutas[0] == "como-usarla-cryptp") {
            include "paginas/como-usarla-crypto.php";
        } else if ($rutas[0] == "como-usarla-nft") {
            include "paginas/como-usarla-nft.php";
        } else if ($rutas[0] == "como-usarla") {
            include "paginas/como-usarla.php";
        } else if ($rutas[0] == "condiciones-trading") {
            include "paginas/condiciones-trading.php";
        } else if ($rutas[0] == "contacto") {
            include "paginas/contacto.php";
        } else if ($rutas[0] == "criptomonedas") {
            include "paginas/criptomonedas.php";
        } else if ($rutas[0] == "cuentas-estandar") {
            include "paginas/cuentas-estandar.php";
        } else if ($rutas[0] == "cuenta-fondo-cobertura") {
            include "paginas/cuenta-fondo-cobertura.php";
        } else if ($rutas[0] == "cuentas-erc") {
            include "paginas/cuentas-erc.php";
        } else if ($rutas[0] == "cuentas-profesional") {
            include "paginas/cuentas-profesional.php";
        } else if ($rutas[0] == "cuenta-vip") {
            include "paginas/cuenta-vip.php";
        } else if ($rutas[0] == "cursos") {
            include "paginas/cursos.php";
        } else if ($rutas[0] == "demo-cfd") {
            include "paginas/demo-cfd.php";
        } else if ($rutas[0] == "demo-crypto") {
            include "paginas/demo-crypto.php";
        } else if ($rutas[0] == "demo-nft") {
            include "paginas/demo-nft.php";
        } else if ($rutas[0] == "depositos-retiros") {
            include "paginas/depositos-retiros.php";
        } else if ($rutas[0] == "descripcion-estandar") {
            include "paginas/descripcion-estandar.php";
        } else if ($rutas[0] == "descripcion-premium") {
            include "paginas/descripcion-premium.php";
        } else if ($rutas[0] == "descripcion-profesional") {
            include "paginas/descripcion-profesional.php";
        } else if ($rutas[0] == "libros") {
            include "paginas/libros.php";
        } else if ($rutas[0] == "eventos-y-webinarios") {
            include "paginas/eventos-y-webinarios.php";
        } else if ($rutas[0] == "fondo-de-cobertura") {
            include "paginas/fondo-de-cobertura.php";
        } else if ($rutas[0] == "forex") {
            include "paginas/forex.php";
        } else if ($rutas[0] == "herramientas-trading") {
            include "paginas/herramientas-trading.php";
        } else if ($rutas[0] == "indice-bruto") {
            include "paginas/indice-bruto.php";
        } else if ($rutas[0] == "imformacion-margen") {
            include "paginas/imformacion-margen.php";
        } else if ($rutas[0] == "instrumentos-cfd") {
            include "paginas/instrumentos-cfd.php";
        } else if ($rutas[0] == "instrumentos-crypto") {
            include "paginas/instrumentos-crypto.php";
        } else if ($rutas[0] == "instrumentos-nft") {
            include "paginas/instrumentos-nft.php";
        } else if ($rutas[0] == "licencias") {
            include "paginas/licencias.php";
        } else if ($rutas[0] == "materia-primas") {
            include "paginas/materia-primas.php";
        } else if ($rutas[0] == "mt4") {
            include "paginas/mt4.php";
        } else if ($rutas[0] == "plataforma-cfds") {
            include "paginas/plataforma-cfds.php";
        } else if ($rutas[0] == "plataforma-cripto") {
            include "paginas/plataforma-cripto.php";
        } else if ($rutas[0] == "plataforma-nft") {
            include "paginas/plataforma-nft.php";
        } else if ($rutas[0] == "negocio-erc") {
            include "paginas/negocio-erc.php";
        } else if ($rutas[0] == "politica-de-privacidad") {
            include "paginas/politica-de-privacidad.php";
        } else if ($rutas[0] == "proteccion-de-fondos") {
            include "paginas/proteccion-de-fondos.php";
        } else if ($rutas[0] == "recompensas-erc") {
            include "paginas/recompensas-erc.php";
        } else if ($rutas[0] == "cpa-amigos") {
            include "paginas/cpa-amigos.php";
        } else if ($rutas[0] == "registro") {
            include "paginas/registro.php";
        } else if ($rutas[0] == "riesgo-de-inversion") {
            include "paginas/riesgo-de-inversion.php";
        } else if ($rutas[0] == "señal-erc") {
            include "paginas/señal-erc.php";
        } else if ($rutas[0] == "sobre-erc") {
            include "paginas/sobre-erc.php";
        } else if ($rutas[0] == "soporte") {
            include "paginas/soporte.php";
        } else if ($rutas[0] == "terminos-generales") {
            include "paginas/terminos-generales.php";
        } else if ($rutas[0] == "tabla-general") {
            include "paginas/tabla-general.php";
        } else if ($rutas[0] == "trading-central") {
            include "paginas/trading-central.php";
        } else {

            include "modulos/slide.php";

            include "modulos/herramientas.php";
            include "modulos/inversion.php";
        }

        include "modulos/footer.php";
    } else {
        echo '<div class="banner_top " id="home">
        ';

        include "modulos/menu.php";
        echo ' </div>';
        if ($rutas[0] == "autochartist") {
            include "paginas/autochartist.php";
        }else if ($rutas[0] == "envio-correo") {
            include "paginas/envio-correo.php";
        } else if ($rutas[0] == "calculadora-trader") {
            include "paginas/calculadora-trader.php";
        } else if ($rutas[0] == "cargos-generales") {
            include "paginas/cargos-generales.php";
        } else if ($rutas[0] == "cfd") {
            include "paginas/cfd.php";
        } else if ($rutas[0] == "comisiones-profecional") {
            include "paginas/comisiones-profecional.php";
        } else if ($rutas[0] == "comisiones") {
            include "paginas/comisiones.php";
        } else if ($rutas[0] == "como-usarla-cfd") {
            include "paginas/como-usarla-cfd.php";
        } else if ($rutas[0] == "como-usarla-cryptp") {
            include "paginas/como-usarla-crypto.php";
        } else if ($rutas[0] == "como-usarla-nft") {
            include "paginas/como-usarla-nft.php";
        } else if ($rutas[0] == "como-usarla") {
            include "paginas/como-usarla.php";
        } else if ($rutas[0] == "condiciones-trading") {
            include "paginas/condiciones-trading.php";
        } else if ($rutas[0] == "contacto") {
            include "paginas/contacto.php";
        }else if ($rutas[0] == "cuentas-erc") {
            include "paginas/cuentas-erc.php";
        } else if ($rutas[0] == "criptomonedas") {
            include "paginas/criptomonedas.php";
        } else if ($rutas[0] == "cuentas-estandar") {
            include "paginas/cuentas-estandar.php";
        } else if ($rutas[0] == "cuenta-fondo-cobertura") {
            include "paginas/cuenta-fondo-cobertura.php";
        } else if ($rutas[0] == "cuenta-premium") {
            include "paginas/cuenta-premium.php";
        } else if ($rutas[0] == "cuentas-profesional") {
            include "paginas/cuentas-profesional.php";
        } else if ($rutas[0] == "cuenta-vip") {
            include "paginas/cuenta-vip.php";
        } else if ($rutas[0] == "cursos") {
            include "paginas/cursos.php";
        } else if ($rutas[0] == "demo-cfd") {
            include "paginas/demo-cfd.php";
        } else if ($rutas[0] == "demo-crypto") {
            include "paginas/demo-crypto.php";
        } else if ($rutas[0] == "demo-nft") {
            include "paginas/demo-nft.php";
        } else if ($rutas[0] == "depositos-retiros") {
            include "paginas/depositos-retiros.php";
        } else if ($rutas[0] == "descripcion-estandar") {
            include "paginas/descripcion-estandar.php";
        } else if ($rutas[0] == "descripcion-premium") {
            include "paginas/descripcion-premium.php";
        } else if ($rutas[0] == "descripcion-profesional") {
            include "paginas/descripcion-profesional.php";
        } else if ($rutas[0] == "libros") {
            include "paginas/Libros.php";
        } else if ($rutas[0] == "eventos-y-webinarios") {
            include "paginas/eventos-y-webinarios.php";
        } else if ($rutas[0] == "fondo-de-cobertura") {
            include "paginas/fondo-de-cobertura.php";
        } else if ($rutas[0] == "forex") {
            include "paginas/forex.php";
        } else if ($rutas[0] == "herramientas-trading") {
            include "paginas/herramientas-trading.php";
        } else if ($rutas[0] == "indice-bruto") {
            include "paginas/indice-bruto.php";
        } else if ($rutas[0] == "imformacion-margen") {
            include "paginas/imformacion-margen.php";
        } else if ($rutas[0] == "instrumentos-cfd") {
            include "paginas/instrumentos-cfd.php";
        } else if ($rutas[0] == "instrumentos-crypto") {
            include "paginas/instrumentos-crypto.php";
        } else if ($rutas[0] == "instrumentos-nft") {
            include "paginas/instrumentos-nft.php";
        } else if ($rutas[0] == "licencias") {
            include "paginas/licencias.php";
        } else if ($rutas[0] == "materia-primas") {
            include "paginas/materia-primas.php";
        } else if ($rutas[0] == "mt4") {
            include "paginas/mt4.php";
        } else if ($rutas[0] == "plataforma-cfds") {
            include "paginas/plataforma-cfds.php";
           } else if ($rutas[0] == "negocio-erc") {
            include "paginas/negocio-erc.php";
        } else if ($rutas[0] == "plataforma-cripto") {
            include "paginas/plataforma-cripto.php";
        } else if ($rutas[0] == "plataforma-nft") {
            include "paginas/plataforma-nft.php";
        } else if ($rutas[0] == "politica-de-privacidad") {
            include "paginas/politica-de-privacidad.php";
        } else if ($rutas[0] == "proteccion-de-fondos") {
            include "paginas/proteccion-de-fondos.php";
        } else if ($rutas[0] == "recompensas-erc") {
            include "paginas/recompensas-erc.php";
        } else if ($rutas[0] == "cpa-amigos") {
            include "paginas/cpa-amigos.php";
        } else if ($rutas[0] == "registro") {
            include "paginas/registro.php";
        } else if ($rutas[0] == "riesg-de-inversion") {
            include "paginas/riesg-de-inversion.php";
        } else if ($rutas[0] == "señal-erc") {
            include "paginas/señal-erc.php";
        } else if ($rutas[0] == "sobre-erc") {
            include "paginas/sobre-erc.php";
        } else if ($rutas[0] == "soporte") {
            include "paginas/soporte.php";
        } else if ($rutas[0] == "terminos-generales") {
            include "paginas/terminos-generales.php";
        } else if ($rutas[0] == "trading-central") {
            include "paginas/trading-central.php";
        } else {

            include "modulos/slide.php";

            include "modulos/herramientas.php";
            include "modulos/inversion.php";
        }



        include "modulos/footer-en.php";
    }




    ?>




    <?php if (!isset($_COOKIE["idioma"])) { //$_COOKIE['idioma']='es' ?>
        <script>
            $(document).ready(function() {
                 $("#myModal3").modal('show');
            });
        </script>
    <?php } ?>

    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" data-backdrop="false" style="background-color: rgba(0, 0, 0, .9);">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">


                    <div class="signin-form profile">
                        <h3 class=""><img src="vistas/img/logo-erc1.png" alt=""></h3>
                        <h3 class="agileinfo_sign">Welcome to ERC GLOBAL MARKETS</h3>
                        <div class="login-form">
                            <h4>Please select the language of your preference</h4>
                            <br>
                            <form method="post">
                                <select name="selectidioma" id="selectidioma" style="width:100%;height :40px; border-radius:20px;">
                                    <option value="" selected disabled>--Select--</option>
                                    <!-- <option value="en"> English</option> -->
                                    <option value="es">Español</option>
                                </select>

                                <input type="submit" class="idioma" value="Apply" style="color:#fff; background-color:#003366; width:50%; ">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- //js -->
    <script src="vistas/js/jquery.vide.min.js"></script>
    <script src="vistas/js/responsiveslides.min.js"></script>

    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>

    <!-- Stats-Number-Scroller-Animation-JavaScript -->
    <script src="vistas/js/waypoints.min.js"></script>
    <script src="vistas/js/counterup.min.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000,
            });
        });
    </script>
    <!-- //Stats-Number-Scroller-Animation-JavaScript -->
    <!-- Calendar -->
    <script src="vistas/js/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>
    <!-- //Calendar -->
    <!-- flexSlider -->
    <link rel="stylesheet" href="vistas/css/flexslider.css" type="text/css" media="screen" property="" />
    <script defer src="vistas/js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <!-- //flexSlider -->
            <!-- FILE UPLOADES JS -->
            <script src="vistas/plugins/fileuploads/js/dropify.min.js"></script>
    <script src="vistas/plugins/fileuploads/js/file-upload.js"></script>
    <!-- //load-more -->
    <!-- for bootstrap working -->
    <script src="vistas/js/bootstrap.js"></script>
    <script src="vistas/js/cookies.js"></script>
    <script type="text/javascript" src="vistas/js/apertura.js"></script>
    <script src="vistas/js/soporte.js"></script>
    <!--<script src="https://kit.fontawesome.com/39c5b9ab05.js" crossorigin="anonymous"></script> -->

    <!-- //for bootstrap working -->
    <script>


    </script>
</body>

</html>