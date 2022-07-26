/*=============================================
FUNCIÓN PARA GENERAR COOKIES
=============================================*/

function crearCookie(nombre, valor, diasExpiracion){

	var hoy = new Date();

	hoy.setTime(hoy.getTime() + (diasExpiracion*24*60*60*1000));

	var fechaExpiracion = "expires=" +hoy.toUTCString();

	document.cookie = nombre + "=" +valor+"; "+fechaExpiracion;
}


/*=============================================
COOKIES
=============================================*/

$(".cookies").delay(3000).fadeIn(1000);

$(".cookies button").click(function(){

	crearCookie("ver_cookies", "ok", 1);

	$(this).parent().hide();

})

/*=============================================
COOKIES
=============================================*/

$(".idioma").delay(3000).fadeIn(1000);

$(".idioma").click(function(){

	// var idioma = $("#selectidioma").val();
	var idioma = 'es';
	crearCookie("idioma", idioma, 1);

window.location="http://localhost/erc/"

})

/*=============================================
VER TABLAS
=============================================*/

$(".read-more").on("click", ".ver-tabla", function(){

	var idTabla = $(this).attr("idTabla");
	

    window.location = "index.php?ruta=tabla-general&idTabla="+idTabla;

	

})