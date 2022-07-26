<?php

class ControladorPlantilla
{

	/*=============================================
	LLAMAMOS LA PLANTILLA
	=============================================*/

	public function plantilla()
	{

		include "vistas/plantilla.php";
	}

	/*=============================================
	Ingreso Usuario
	=============================================*/

	public function ctrCambiarIdioma()
	{
		$_SESSION["idioma"] = 'es';
	 	$ruta = ControladorRuta::ctrRuta();
		
		 	echo '<script>
					
		 					window.location = "' . $ruta . '";				

		 				</script>';

		// if (isset($_POST["selectidioma"])) {




		//  $_SESSION["idioma"] = $_POST["selectidioma"];

		// 	$ruta = ControladorRuta::ctrRuta();

		// 	echo '<script>
					
		// 					window.location = "' . $ruta . '";				

		// 				</script>';
		// }
	}
}
