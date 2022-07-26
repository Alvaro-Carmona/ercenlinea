
<?php


class ControladorFondo{
/*=============================================
	MOSTRAR Movimientos
	=============================================*/

	static public function ctrVerfondo($tabla,$item, $valor){


		$respuesta = ModeloFondos::mdlMostrarFondos($tabla, $item, $valor);

		return $respuesta;
	
	}
}