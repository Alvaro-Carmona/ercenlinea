<!--1-->
<link rel="stylesheet" href="vistas/css/style-starter1.css">
<section class="w3l-about-breadcrumb baner-azul">
    <div class="breadcrumb-bg breadcrumb-bg-services py-5">
        <div class="container py-lg-4 py-md-3">
            <h2 class="title">Academia ERC</h2>
            <ul class="breadcrumbs-custom-path">

               <!-- <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> eventos y webinarios</li>-->
            </ul>
        </div>
    </div>
</section>
<!--/Blog-Posts-->
<section class="w3l-blog py-5" id="blog">
    <div class="container">
        <div class="heading text-center mx-auto">
            <h3 class="title-big">WEBINARIOS</h3>
        </div>
        <div class="inner-sec-w3ls py-lg-5 py-md-4 py-2">
            <!--/services-grids-->
            <div class="row blog-sec">
            <?php

$tabla="webinarios";
$item = null;
$valor = null;

$fondo= ControladorFondo::ctrVerFondo($tabla,$item, $valor);
foreach ($fondo as $key => $value) {

    echo' <div class="col-lg-4 col-md-6 about-in blog-grid-info text-left">
    <div class="card img">
        <div class="card-body img">
            <a href="#blog-single" class="d-block">
                <img src=" '.$value["imagen"].'" alt="" class="img-fluid radius-image">
            </a>
            <div class="blog-des mt-4">
                <h5 class="card-title mb-2"><a href="#blog-single"> '.$value["titulo"].'</a></h5>
                <ul class="admin-post mb-3">
                    <li>
                        <span class="fa fa-user-o"></span><a href="#admin">  '.$value["impartidor"].'</a>
                    </li>
                    <li>
                        <p><span class="fa fa-clock-o"></span>  '.$value["fecha-curso"].'</p>
                    </li>

                </ul>
                <textarea class="card-text" maxlength="100" readonly style="width:350px; height:150px; font-size:14px; border-style:none; border-width:0px;"> '.$value["descripcion"].'
                </textarea>
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
</section>
<!--//Blog-Posts-->
<!--/Blog-Posts2-->
<section class="w3l-blog py-5" id="blog">
    <div class="container">
        <div class="heading text-center mx-auto">
            <h3 class="title-big">EVENTOS</h3>
            <br>
            <h4 class="text-danger">Parcialmente Suspendido Por Motivos de COVID-19</h4>
        </div>
</section>
<!--//Blog-Posts2-->