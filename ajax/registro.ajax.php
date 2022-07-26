<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";



  class ajaxRegistro{

    public $nombre;
	public $patrocinador;
	public $apellidos;
	public $genero;
	public $datepicker;
	public $email;
	public $pais;
	public $cuenta;
	public $telefono;
	public $plataforma;
	public $direccion;
	public $ciudad;
	public $documentoid;
	public $inputProfesiones;
	public $profesion;
	public $codigo_pais;
	public $posterior;
	public $frontal;
	public $comprobante;
	public $cp;



    public function ajaxregistrarusuario(){

		$datos = array("nombre"=>$this->nombre,
						"patrocinador"=>$this->patrocinador,
						"apellidos"=>$this->apellidos,
						"genero"=>$this->genero,
						"datepicker"=>$this->datepicker,
						"email"=>$this->email,
						"pais"=>$this->pais,
						"cuenta"=>$this->cuenta,
						"telefono"=>$this->telefono,
						"plataforma"=>$this->plataforma,
						"direccion"=>$this->direccion,
						"ciudad"=>$this->ciudad,
						"cp"=>$this->cp,
						"documentoid"=>$this->documentoid,
						"inputProfesiones"=>$this->inputProfesiones,
						"profesion"=>$this->profesion,
						"codigo_pais"=>$this->codigo_pais,
						"frontal"=>$this->frontal,
						"posterior"=>$this->posterior,
						"comprobante"=>$this->comprobante);
						

		$respuesta = UsuarioControlador::ctrRegistrarUsuario($datos);

		echo $respuesta;

	}



}


if(isset($_POST["nombre"])){

	$informacion = new AjaxRegistro();
	$informacion ->  nombre = $_POST["nombre"];
	$informacion ->  patrocinador = $_POST["patrocinador"];
	$informacion ->  apellidos = $_POST["apellidos"];
	$informacion ->  genero = $_POST["genero"];
	$informacion ->  datepicker = $_POST["datepicker"];
	$informacion ->  email = $_POST["email"];
	$informacion ->  pais = $_POST["pais"];
	$informacion ->  cuenta = $_POST["cuenta"];
	$informacion ->  telefono = $_POST["telefono"];
	$informacion ->  plataforma = $_POST["plataforma"];
	$informacion ->  direccion= $_POST["direccion"];
	$informacion ->  cp= $_POST["cp"];
	$informacion ->  documentoid = $_POST["documentoid"];
	$informacion ->  inputProfesiones = $_POST["inputProfesiones"];
	$informacion ->  profesion = $_POST["profesion"];
	$informacion ->  codigo_pais = $_POST["codigo_pais"];
	$informacion ->  ciudad = $_POST["ciudad"];
	$informacion ->  posterior = $_POST["posterior"];
	$informacion ->  frontal = $_POST["frontal"];
	$informacion ->  comprobante = $_POST["comprobante"];
	
    $informacion -> AjaxRegistrarUsuario();


}







   
                      
                    
                       
                        









                 
                      
                