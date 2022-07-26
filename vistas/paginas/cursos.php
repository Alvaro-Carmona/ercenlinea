<!--1-->
<link rel="stylesheet" href="vistas/css/style-starter1.css">
<link href="vistas/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="vistas/css/botones.css">

<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-services py-5 baner-azul">
        <div class="container py-lg-4 py-md-2">
            <h2 class="title">Cursos</h2>
            <ul class="breadcrumbs-custom-path">

            </ul>
        </div>
    </div>
</section>
<!--/Blog-Posts-->
<section class="w3l-blog py-5" id="blog">
    <div class="container">
        <div class="heading text-center mx-auto">
            <h3 class="title-big" style="font-family: Mulish; color:#3f3a64;">Cursos online <br> “ERC GLOBAL MARKETS” </h3>
        </div>
        <div class="inner-sec-w3ls py-lg-5 py-md-4 py-2">
        <div class="row blog-sec">
            <!--/services-grids-->
            <?php

$tabla="cursos";
$item = null;
$valor = null;

$fondo= ControladorFondo::ctrVerFondo($tabla,$item, $valor);
foreach ($fondo as $key => $value) {

    echo'      
    <div class="col-lg-6 col-md-6 about-in blog-grid-info text-left">
        <div class="card img">
            <div class="card-body img">
                <a href="#blog-single" class="d-block">
                    <img src="vistas/img/blog1.jpg" alt="" class="img-fluid radius-image">
                </a>
                <div class="col-lg-6  mt-lg-0 mt-5 pl-lg-4">
                    <img src="'.$value["imagen"].'" alt="" class="img-fluid" width="500px">
                </div>
                <div class="col-lg-6 ">
                    <h2 class="sub-titlehny" style="color:#004094">'.$value["titulo"].'</h2>
<br>

                    <p class="my-2">'.$value["descripcion"].'
                    </p>
                    <a href="registro" class="btn-cards mt-4" style="margin-top:20px;">'.$value["boton"].'</a>
                </div>
            </div>
        </div>
    </div>
 
	
    ';

    
}

?>
      </div> 
       
            </div>
        </div>
    </div>
</section>
<!--//Blog-Posts-->