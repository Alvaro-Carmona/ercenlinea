<link rel="stylesheet" href="vistas/css/botones.css">
		
		<!-- content -->
		<div data-vide-bg="vistas/video/erc10" style="background-color: rgba(0, 0, 0, .6)">
			<div class="center-container">
				<!--// top_header_agile_info_w3ls -->
				<!--/slider-->
				<div class="banner_wthree_agile_info">
					<div class="slider" >
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
							<?php

$tabla="slider";
$item = null;
$valor = null;

$fondo= ControladorFondo::ctrVerFondo($tabla,$item, $valor);
foreach ($fondo as $key => $value) {

    echo'
	<li>
		<div class="agileits-banner-info">
			
			<h3 class="letras-slide"> '.$value["nombre"].'</h3>
			
			
			
			<div class="more">
				<a  href=" '.$value["ruta"].'" class="hvr-shutter-in-vertical">  '.$value["nombre_boton"].'<span
						class="glyphicon glyphicon-arrow-right"></span></a>
			</div>
		</div>
	</li>
    ';

    
}

?>
								
							</ul>
						</div>
					</div>
				</div>
				<!--//slider-->
			</div>
		</div>