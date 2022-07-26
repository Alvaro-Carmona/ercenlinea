<?php

require_once "conexion.php";

class ModeloUsuarios{

/*=============================================
	Nueva habitación
	=============================================*/

	static public function mdlRegistrarUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_u, apellidos_u, email_u, password_u, genero_u, fecha_u, celular_u, plataforma, pais_u, codigo_pais, documentoid,profesion,sector, ciudad_u, cp_u, iden_frontal_u, iden_posterior_u, comp_domici_u, margen_u, margen_libre_u, balance_u, credito_u, equidad_u,n_expediente_u, tipocuenta_u,fecha_inicio_u,activo_u,id_nft,token, acceso_cursos, patrocinador_red, deposito_i, deposito_f) VALUES (:nombre_u, :apellidos_u, :email_u, :password_u, :genero_u, :fecha_u, :celular_u,:plataforma, :pais_u, :codigo_pais, :documentoid,:profesion,:sector,  :ciudad_u, :cp_u, :iden_frontal_u, :iden_posterior_u, :comp_domici_u, :margen_u, :margen_libre_u, :balance_u, :credito_u, :equidad_u, :n_expediente_u, :tipocuenta_u, :fecha_inicio_u, :activo_u, :id_nft, :token, :acceso_cursos, :patrocinador_red, :deposito_i, :deposito_f)");
        
		$stmt->bindParam(":nombre_u", $datos["nombre_u"], PDO::PARAM_STR);
		$stmt->bindParam(":apellidos_u", $datos["apellidos_u"], PDO::PARAM_STR);
		$stmt->bindParam(":email_u", $datos["email_u"], PDO::PARAM_STR);
		$stmt->bindParam(":password_u", $datos["password_u"], PDO::PARAM_STR);
		$stmt->bindParam(":genero_u", $datos["genero_u"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_u", $datos["fecha_u"], PDO::PARAM_STR);
		$stmt->bindParam(":celular_u", $datos["celular_u"], PDO::PARAM_STR);
		$stmt->bindParam(":plataforma", $datos["plataforma"], PDO::PARAM_STR);
		$stmt->bindParam(":pais_u", $datos["pais_u"], PDO::PARAM_STR);
        $stmt->bindParam(":codigo_pais", $datos["codigo_pais"], PDO::PARAM_STR);
        $stmt->bindParam(":documentoid", $datos["documentoid"], PDO::PARAM_STR);
        $stmt->bindParam(":profesion", $datos["profesion"], PDO::PARAM_STR);
        $stmt->bindParam(":sector", $datos["sector"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad_u", $datos["ciudad_u"], PDO::PARAM_STR);
		$stmt->bindParam(":cp_u", $datos["cp_u"], PDO::PARAM_STR);
		$stmt->bindParam(":iden_frontal_u", $datos["iden_frontal_u"], PDO::PARAM_STR);
		$stmt->bindParam(":iden_posterior_u", $datos["iden_posterior_u"], PDO::PARAM_STR);
		$stmt->bindParam(":comp_domici_u", $datos["comp_domici_u"], PDO::PARAM_STR);
		$stmt->bindParam(":margen_u", $datos["margen_u"], PDO::PARAM_STR);
		$stmt->bindParam(":margen_libre_u", $datos["margen_libre_u"], PDO::PARAM_STR);
		$stmt->bindParam(":balance_u", $datos["balance_u"], PDO::PARAM_STR);
		$stmt->bindParam(":credito_u", $datos["credito_u"], PDO::PARAM_STR);
        $stmt->bindParam(":equidad_u", $datos["equidad_u"], PDO::PARAM_STR);
		$stmt->bindParam(":n_expediente_u", $datos["n_expediente_u"], PDO::PARAM_STR);
		$stmt->bindParam(":tipocuenta_u", $datos["tipocuenta_u"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_inicio_u", $datos["fecha_inicio_u"], PDO::PARAM_STR);
		$stmt->bindParam(":activo_u", $datos["activo_u"], PDO::PARAM_STR);
		$stmt->bindParam(":id_nft", $datos["id_nft"], PDO::PARAM_STR);
		$stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
		$stmt->bindParam(":acceso_cursos", $datos["acceso_cursos"], PDO::PARAM_STR);
		$stmt->bindParam(":patrocinador_red", $datos["patrocinador_red"], PDO::PARAM_STR);
		$stmt->bindParam(":deposito_i", $datos["deposito_i"], PDO::PARAM_STR);
		$stmt->bindParam(":deposito_f", $datos["deposito_f"], PDO::PARAM_STR);

		
		if($stmt->execute()){

			return "ok";

		}else{

			echo "\nPDO::errorInfo():\n";
    		print_r(Conexion::conectar()->errorInfo());
		
		}

		$stmt->close();
		$stmt = null;

	}

	 	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;


	}

}