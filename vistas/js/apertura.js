$(".siguiente1").click(function () {

	
		$(".direccion").show();
		$(".datos-personales").hide();
		$(".cuentas").hide();
		



	



})
$(".siguiente2").click(function () {

	
    $(".direccion").show();
    $(".datos-personales").hide();
    
    







})
$(".anterior").click(function () {

	
    $(".direccion").hide();
    $(".datos-personales").show();
    
    







})

/*=============================================
LISTADO DE PAISES
=============================================*/

$.ajax({

	url:"vistas/js/paises.json",
	type: "GET",
	success: function(respuesta){
		
		respuesta.forEach(seleccionarPais);

		function seleccionarPais(item, index){
			
			var pais =  item.name;
			var codPais =  item.code;
			var dial = item.dial_code;

			$("#inputPais").append(

				`<option value="`+pais+`,`+codPais+`,`+dial+`">`+pais+`</option>`

			)


		}

	}

})

/*=============================================
LISTADO DE PAISES
=============================================*/

$.ajax({

	url:"vistas/js/profesiones.json",
	type: "GET",
	success: function(respuesta){
		
		respuesta.forEach(seleccionarProfesion);

		function seleccionarProfesion(item, index){
			
			var name =  item.name;
			var valor =  item.valor;
		

			$("#inputProfesiones").append(

				`<option value="`+valor+`">`+name+`</option>`

			)


		}

	}

})

/*=============================================
AGREGAR DIAL CODE DEL PAIS
=============================================*/

$("#inputPais").change(function(){

	$(".dialCode").val($(this).val().split(",")[2])

})

/*=============================================
VERIFICAR CORREO
=============================================*/

$("#documento-id").change(function(){

    var documento = $(this).val();

    console.log("documento", documento);

if(documento == "cedula" ){

    $(".frontal-trasera").show();
    $(".frontal").hide();
}

if(documento == "identificacion" ){
    $(".frontal-trasera").show();
    $(".frontal").hide();
    
}

if(documento == "licencia" ){
    $(".frontal-trasera").show();
    $(".frontal").hide();
    
}

if(documento == "pasaporte" ){

    $(".frontal").show();
    $(".frontal-trasera").hide();
}



})

$(".guardarRegistro").click(function(){


    var patrocinador = $("#patrocinador").val();
    console.log("patrocinador", patrocinador);
    var nombre = $("#nombre").val();
  console.log("nombre", nombre);
        var apellidos = $("#apellidos").val();
        console.log("apellidos", apellidos);
        var genero = $("#genero").val();
        console.log("genero", genero);
        var datepicker = $("#datepicker").val();
        console.log("datepicker", datepicker);
        var email = $("#email").val();
        console.log("email", email);
        var verificaremail = $("#verificaremail").val();
        console.log("verificaremail", verificaremail);
      	var pais = $("#inputPais").val().split(",")[0];
        console.log("pais", pais);
        var cuenta = $("#cuenta").val();
        console.log("cuenta", cuenta);
        var telefono = $("#telefono").val();
        console.log("telefono", telefono);
        var plataforma = $("#plataforma").val();
        console.log("plataforma", plataforma);
        var direccion = $("#direccion").val();
        console.log("direccion", direccion);
          var ciudad = $("#ciudad").val();
          console.log("ciudad", ciudad);
          var cp = $("#cp").val();
          console.log("cp", cp);
          var documentoid = $("#documento-id").val();
          console.log("documentoid", documentoid);
          var inputProfesiones = $("#inputProfesiones").val();
          console.log("inputProfesiones", inputProfesiones);
          var profesion = $("#profesion").val();
          console.log("profesion", profesion);
          var aoption1 = $("#a-option1:checked").val();
          console.log("a-option1", aoption1);
          var boption1 = $("#b-option1:checked").val();
          console.log("b-option1", boption1);
          var aoption = $("#a-option:checked").val();
          console.log("a-option", aoption);
          var boption = $("#b-option:checked").val();
          console.log("b-option", boption);
        	var codigo_pais = $("#inputPais").val().split(",")[1];
          console.log("codigo_pais", codigo_pais);
          var posterior2 =document.getElementById("frontal").files[0].name;
          
       
          var frontal2 = document.getElementById("trasera").files[0].name;
          
          
          var comprobante2 = document.getElementById("comprobante").files[0].name; 
         
        
  
          var aceptarTerminos = $("#aceptarTerminos:checked").val();
          console.log("aceptarTerminos", aceptarTerminos);
          var aceptarTerminos2 = $("#aceptarTerminos2:checked").val();
          console.log("aceptarTerminos2", aceptarTerminos2);
  
          if (nombre == "" || apellidos == "" || genero == "" || datepicker == "" || email == "" || pais == "" || cuenta == "" || telefono == "" ||
          plataforma == "" || direccion == "" || ciudad == ""||cp == ""||posterior2 == ""||frontal2 == ""||
          aceptarTerminos2 != "on" ||	aceptarTerminos2 != "on" || verificaremail!=email ){
  
          
  
              swal({
                  title: "Faltan datos, tu correo no coincide o no ha aceptado los términos y condiciones",
                  text: "",
                  type: "error",
                  confirmButtonText: "¡Cerrar!"
              });
          }else{

            
  
        
      var formData = new FormData();
      var comprobante = $('#comprobante')[0].files[0];
     
      formData.append('comprobante',comprobante);
      $.ajax({
          url: 'ajax/comprobante.ajax.php',
          type: 'post',
          data: formData,
          contentType: false,
          processData: false,
          success: function(response) {
              if (response != 0) {
               
  
                var formData = new FormData();
                var posterior = $('#trasera')[0].files[0];
                formData.append('posterior',posterior);
                $.ajax({
                     url: 'ajax/posterior.ajax.php',
                    type: 'post',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response != 0) {
                            
                          var formData = new FormData();
                          var frontal = $('#frontal')[0].files[0];
                          formData.append('frontal',frontal);
                          $.ajax({
                              url: 'ajax/frontal.ajax.php',
                              type: 'post',
                              data: formData,
                              contentType: false,
                              processData: false,
                              success: function(response) {
                                  if (response != 0) {
                                     
  
                                    var datos = new FormData();
                                    datos.append("nombre", nombre);
                                    datos.append("patrocinador", patrocinador);
                                    datos.append("apellidos", apellidos);
                                    datos.append("genero", genero);
                                    datos.append("datepicker", datepicker);
                                    datos.append("email", email);
                                    datos.append("pais", pais);
                                    datos.append("cuenta", cuenta);
                                    datos.append("telefono", telefono);
                                    datos.append("plataforma", plataforma);
                                    datos.append("direccion", direccion);
                                    datos.append("ciudad", ciudad);
                                    datos.append("cp", cp);
                                    datos.append("documentoid", documentoid);
                                    datos.append("inputProfesiones", inputProfesiones);
                                    datos.append("profesion", profesion);
                                    datos.append("codigo_pais", codigo_pais);
                                    datos.append("posterior", posterior2);
                                    datos.append("frontal", frontal2);
                                    datos.append("comprobante", comprobante2);

                                
                                    $.ajax({
                                
                                      url: "ajax/registro.ajax.php",
                                      method: "POST",
                                      data: datos,
                                      cache: false,
                                      contentType: false,
                                      processData: false,
                                      success: function (respuesta) {
                                        if(respuesta == "ok"){
                                
                                          swal({
                                            title: "¡OK!",
                                            text: "¡ Su solicitud esta siendo procesada, se le notificara el estado de su solicitud a continuacion!",
                                            type:"success",
                                            confirmButtonText: "Siguiente",
                                            closeOnConfirm: false
                                            },
                                  
                                            function(isConfirm){
                                  
                                              if(isConfirm){
                                                window.location = "index.php?ruta=envio-correo&email="+email;
                                              }
                                          });
                                        }else{
                                          swal({
                                            title: "Error al guardar",
                                            text: "Intente mas tarde",
                                            type: "error",
                                            confirmButtonText: "¡Cerrar!"
                                          });
                                        }
                                
                                        
                                
                                      }
                                
                                    })
  
  
  
  
  
                                  } else {
                                    swal({
                                      title: "Error al guardar",
                                      text: "Por favor subir su documento en alguno de los siguientes formatos: PDF,JPG,PNG O JPEG",
                                      type: "error",
                                      confirmButtonText: "¡Cerrar!"
                                    });
                                  }
                              }
                          });
  
  
                        } else {
                          swal({
                            title: "Error al guardar",
                            text: "Por favor subir su documento en alguno de los siguientes formatos: PDF,JPG,PNG O JPEG",
                            type: "error",
                            confirmButtonText: "¡Cerrar!"
                          });
                        }
                    }
                });
  
  
  
              } else {
                swal({
                  title: "Error al guardar",
                  text: "Por favor subir su documento en alguno de los siguientes formatos: PDF,JPG,PNG O JPEG",
                  type: "error",
                  confirmButtonText: "¡Cerrar!"
                });
              }
          }
      });
  
      
  
  
      
    }
  }) 