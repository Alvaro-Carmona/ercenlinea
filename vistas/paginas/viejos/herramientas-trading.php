<!--1-->
<link rel="stylesheet" href="vistas/css/botones.css">
<link rel="stylesheet" href="vistas/css/style-starter1.css">
<link href="vistas/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<section class="w3l-about-breadcrumb baner-azul">
    <div class="breadcrumb-bg breadcrumb-bg-services py-5">
        <div class="container py-lg-4 py-md-3">
            <h2 class="title">Herramientas</h2>
            <ul class="breadcrumbs-custom-path">

                <!--   <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Trading</li>-->
            </ul>
        </div>
    </div>
</section>
<!--/Blog-Posts-->
<section class="w3l-blog py-5" id="blog">
    <div class="container">
        <div class="inner-sec-w3ls py-lg-5 py-md-4 py-2">
            <!--/services-grids-->
            <div class="row blog-sec">

                <?php

                $tabla = "herramientas";
                $item = null;
                $valor = null;
                $br = "";
                $fondo = ControladorFondo::ctrVerFondo($tabla, $item, $valor);
                foreach ($fondo as $key => $value) {
                    if($value["titulo"]=='Señal ERC'){
                        $br = '<br><br>';
                    }else{
                         $br = "";

                    }
                    echo '
    <div class="col-lg-6 col-md-6 about-in blog-grid-info text-left">
    <div class="card img">
    <div class="card-body img">
    <a href="#blog-single" class="d-block">
        <img src="assets/images/blog1.jpg" alt="" class="img-fluid radius-image">
    </a>
    <div class="col-lg-6  mt-lg-0 mt-5 pl-lg-4">
        <img src="' . $value["imagen"] . '" alt="" class="img-fluid" width="500px">
    </div>
    <div class="col-lg-6 ">
        <h2 class="sub-titlehny">' . $value["titulo"] . '</h2>

        <p class="my-3">' . $value["descripcion"] . ' </p> <br>
        <a href="" class="btn-cards mt-4" style="margin-top:20px;">' . $value["boton"] . '</a>
    </div>
    
</div>
'.$br.'
</div>
</div>
    ';
                }

                ?>

            </div>
        </div>
    </div>
</section>
<!--//Blog-Posts-->