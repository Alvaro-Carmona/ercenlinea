<!--1-->
<link rel="stylesheet" href="vistas/css/style-starter1.css">
<link rel="stylesheet" href="vistas/css/botones.css">
<link href="vistas/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<section class="w3l-about-breadcrumb baner-azul">
    <div class="breadcrumb-bg breadcrumb-bg-services py-5">
        <div class="container py-lg-4 py-md-3">
            <h2 class="title">Academia ERC</h2>
            <ul class="breadcrumbs-custom-path">

            </ul>
        </div>
    </div>
</section>
<!--/Blog-Posts-->
<section class="w3l-blog py-5" id="blog">
    <div class="container">
        <div class="heading text-center mx-auto">
            <h3 class="title-big">LIBROS</h3>
        </div>
        <div class="inner-sec-w3ls py-lg-5 py-md-4 py-2">
            <!--/services-grids-->
            <div class="row blog-sec">
<?php

            $tabla = "libros";
            $item = null;
            $valor = null;

            $fondo = ControladorFondo::ctrVerFondo($tabla, $item, $valor);
            foreach ($fondo as $key => $value) {

                echo '


                        <div class="col-lg-3 col-md-6 about-in blog-grid-info text-left">

    <div class="card img">
    <div class="card-body img">
        <a href="#blog-single" class="d-block">
            <img src="' . $value["imagen"] . '" alt="" class="img-fluid radius-image">
        </a>
        <div class="blog-des mt-4">
            <ul class="admin-post mb-3">
            </ul>
            <p class="card-text" maxlength="100">' . $value["titulo"] . '
            </p>
            <br>
            <a href="registro" " class="btn-cards mt-4" style="margin-top:20px;">' . $value["boton"] . '</a>

        </div>
    </div>
</div>

</div>


    ';
            }

            ?>
</div>
</div>
</section>
<!--//Blog-Posts-->