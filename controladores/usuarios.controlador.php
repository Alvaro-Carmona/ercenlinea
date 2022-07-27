<?php

class usuarioControlador{

    static public function ctrRegistrarUsuario($datos){
     
		if(isset($datos["nombre"])){

		
				
					
				$tabla = "usuarios_cabinet";

				/*=============================================
				GENERAR CONTRASEÑA ALEATORIA
				=============================================*/

				function generarPassword($longitud){

					$key = "";
					$pattern = "1234567890abcdefghijklmnopqrstuvwxyz";

					$max = strlen($pattern)-1;

					for($i = 0; $i < $longitud; $i++){

						$key .= $pattern[mt_rand(0,$max)];

					}

					return $key;

				}
				function generarFolio($longitud2){

					$key = "";
					$pattern = "1234567890";

					$max = strlen($pattern)-1;

					for($i = 0; $i < $longitud2; $i++){

						$key .= $pattern[mt_rand(0,$max)];

					}

					return $key;

				}
                function generarToken($longitud2){

					$key = "";
                    $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";

					$max = strlen($pattern)-1;

					for($i = 0; $i < $longitud2; $i++){

						$key .= $pattern[mt_rand(0,$max)];

					}

					return $key;

				}
                $fecha = date('m-d-Y h:i:s a', time());
				$nuevaPassword = generarPassword(8);
				$folio = generarFolio(8);
                $token = generarToken(8);

                       $encriptar2 = crypt($token, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$
			   		$2a$07$asxx54ahjppf45sd87a5auxq/SS293XhTEeizKWMnfhnpfay0AALe');


				$datos = array("nombre_u" => $datos["nombre"],
							"apellidos_u" => $datos["apellidos"],
							"patrocinador_red" => $datos["patrocinador"],
							"email_u" => $datos["email"],
							"password_u" => $nuevaPassword,
							"genero_u" => $datos["genero"],
                            "fecha_u" => $datos["datepicker"],
							"celular_u" => $datos["telefono"],
							"plataforma" => $datos["plataforma"],
							"pais_u" => $datos["pais"],
                            "codigo_pais" => $datos["codigo_pais"],
                            "documentoid" => $datos["documentoid"],
                            "profesion" => $datos["profesion"],
                            "sector" => $datos["inputProfesiones"],
							"ciudad_u" => $datos["ciudad"],
							"cp_u" => $datos["cp"],
							"iden_frontal_u" => 'vistas/img/documentos/'.$datos["frontal"],
							"iden_posterior_u" => "vistas/img/documentos/".$datos["posterior"],
							"comp_domici_u" =>  "vistas/img/documentos/".$datos["comprobante"],
                            "margen_u" => "0.0",
                            "margen_libre_u" => "0.0",
                            "balance_u" => "0.0",	
							"credito_u" => "0.0",
							"equidad_u" => "0.0",
							"n_expediente_u" => $folio,
							"tipocuenta_u" => $datos["cuenta"],
                            "fecha_inicio_u" => $fecha,
                            "activo_u" => "0",
                            "id_nft" => "0",
                            "token" => $encriptar2,
                            "acceso_cursos" => "0",
							"deposito_i" => "0",
							"deposito_f" => "300");

				$respuesta = ModeloUsuarios::mdlRegistrarUsuario($tabla, $datos);

				return $respuesta;
				
            
		

			
		

	}



}

		/*=============================================
	Mostrar Usuarios
	=============================================*/

	static public function ctrMostrarAsociados($item, $valor){
	
		$tabla = "asociados";

		$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

		return $respuesta;

	}

			/*=============================================
	Mostrar Usuarios
	=============================================*/

	static public function ctrMostrarVendedor($item, $valor){
	
		$tabla = "crm_usuarios";

		$respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

		return $respuesta;

	}



}

