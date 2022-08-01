<link rel="stylesheet" href="vistas/css/botones.css">


<div class="header_bg  navbar-fixed-top">

	<!-- //footer -->

	<?php if (!isset($_COOKIE["ver_cookies"])) : ?>



		<div class=" bg-white w-100 text-center py-2 shadow-lg cookies">



			<!-- <p>This website uses cookies to ensure that you get the best experience when browsing our site. -->
			<p>
				Este sitio web utiliza cookies para garantizar que obtenga la mejor experiencia al navegar por nuestro sitio.

				<!-- <a href="politicas-de-privacidad.pdf" target="_blank">Read More</a> -->
				<a href="politicas-de-privacidad.pdf" target="_blank">Leer Mas</a>

			</p>

			<!-- <button class="btn btn-info btn-md px-5">Allow Cookies</button> -->
			<button class="btn btn-info btn-md px-5">Aceptar Cookies</button>



		</div>



	<?php endif ?>

	<!-- header_top -->





	<div class="top_bg ">

		<div class="container">

			<div class="header_top">

				<div class="top_left">

					<div class="row">

						<div class=" col-2 col-lg-1">

							<!-- <h2><a href="registro">50%off</a></h2> -->
							<h2><a href="registro">Participar</a></h2>

						</div>
						<div class="col-lg-1"></div>
			

						<div class="col-10 col-lg-10 promociones-2">
							<!-- <h2> use nuestro codigo "big61" y obten un bono de 15% al depositar más de 1000 USD </h2>-->
							<h2 style="font-family: Mulish;">PARTICIPA EN NUESTRA PROMOCIÓN DEL MES Y GANA HASTA 2 ETHEREUM (ETH)*</h2>
						</div>

					</div>



				</div>

				<div class="top_right">

					<ul>

						<!--<li><a href="soporte">soporte</a></li>|-->

						<li><a href="contacto">Contacto</a></li>|

						<li><a href="#" data-toggle="modal" data-target="#modal-fill">Ingresar </a></li>|

						</li>



					</ul>

				</div>

				<div class="clearfix"> </div>

			</div>

		</div>

	</div>

	<!-- Modal -->






	<div class="modal modal-fill fade" data-backdrop="false" id="modal-fill" tabindex="-1" style=" background-color: rgba(0, 0, 0, .9);">

<div class="modal-dialog">

	<div class="modal-content">

		<div class="modal-header">

			<img src="vistas/img/logo-erc1.png" alt="">
		</div>

		<div class="modal-body text-center">
		   
			<h3 class="" style="color:#000; font-family:mulish;">Selecciona la plataforma a la que deseas ingresar, recuerda que al registrarte seleccionaste una plataforma ERC</h3>
			
			<div class="row">
		 
				<div class="col-lg-6 ">
				   <div class="imgm">
					<a  href="https://erc-td.ercglobalmarkets.com"><img class="cfd" href="https://erc-td.ercglobalmarkets.com" src="vistas/img/cfds01.png" style="width:145px;" alt=""></a>
					<a  href="https://erc-crypto.ercglobalmarkets.com"><img class="crypto" href="https://erc-td.ercglobalmarkets.com" src="vistas/img/crypto01.png" style="width:145px" alt=""></a>
					<a   href="https://erc-nft.ercglobalmarkets.com"><img class="nft" src="vistas/img/nft01.png" style="width:145px;" alt=""></a>
					</div>
					<!-- <a href="https://erc-td.ercglobalmarkets.com" target="_blank" rel="noopener noreferrer"><button type="button" class="btnModal ">Ingresar</button></a> -->

				</div>

				<div class="col-lg-6 text-center">

				

					<!-- <a href="https://erc-crypto.ercglobalmarkets.com" target="_blank" rel="noopener noreferrer"><button type="button" class="btnModal float-end">Ingresar</button></a> -->

				</div>

				<div class="col-lg-6 text-center">

					

					<!-- <a href="https://erc-nft.ercglobalmarkets.com" target="_blank" rel="noopener noreferrer"><button type="button" class="btnModal float-end">Ingresar</button></a> -->
					<style>
						
					</style>
				</div>

			</div>

		</div>

		<div class="modal-footer">

			<button type="button" class="btn btn-danger" style="border-radius: 40px;" data-dismiss="modal">Regresar</button>
		   <script>
			
			  </script>


		</div>

	</div>

</div>

</div>

	<!-- /.modal -->

	<!-- header -->

	<div class="container">

		<div class="header">



			<!-- start header_right -->



			<!-- start header menu -->

			<ul class="megamenu skyblue">

				<li><a  href="inicio" style="padding:0px;"><img src="vistas/img/logo-erc.png" class="logo-principal cursor"></a></li>

				<!-- <li><a class="color1" href="inicio">Inicio</a></li> -->

				<li class="grid"><a class="color2" href="#">Nosotros</a>

					<div class="megapanel">

						<div class="row">

							<div class="col1">

								<div class="h_nav">

									<h4>Nosotros</h4>

									<ul>

										<li><a href="sobre-erc" style="color:#000;">Sobre ERC</a></li>

										<li><a href="contacto" style="color:#000;">Contacto</a></li>





									</ul>

								</div>

							</div>

							<div class="col1">

								<div class="h_nav">

									<h4>LEGAL</h4>

									<ul>

										<li><a href="terminos-generales">Términos Generales</a></li>

										<li><a href="cargos-generales">Cargos Generales</a></li>

										<li><a href="politica-de-privacidad">Política de Privacidad</a></li>

										<li><a href="riesgo-de-inversion">Riesgo de Inversión</a></li>

										<!-- <li><a href="licencias">Licencias</a></li> -->

										<li><a href="proteccion-de-fondos">Protección de Fondos</a></li>

									</ul>

								</div>

							</div>



						</div>



					</div>

				</li>

				<li class=" grid"><a class="color4" href="#">Plataformas</a>

					<div class="megapanel">

						<div class="row">

							<div class="col1">

								<div class="h_nav">

									<h4> Plataformas ERC</h4>

									<ul>

										<li><a href="plataforma-cfds"> Plataforma CFDS</a></li>

										<li><a href="plataforma-cripto">Plataforma CRIPTO</a></li>

										<!-- <li><a href="plataforma-nft">Plataforma NFTS</a></li> -->



									</ul>

								</div>

							</div>
<!-- =================================================================== -->
							<!-- <div class="col1">

								<div class="h_nav">

									<h4>Plataforma CFDS</h4>

									<ul>



										<li><a href="#" data-toggle="modal" data-target="#exampleModal">Demostración</a></li>



									</ul>

								</div>

							</div>

							<div class="col1">

								<div class="h_nav">

									<h4>Plataforma Crypto</h4>

									<ul>



										<li><a href="#" data-toggle="modal" data-target="#exampleModal">Demostración</a></li>



									</ul>

								</div>

							</div>

							<div class="col1">

								<div class="h_nav">

									<h4>Plataforma NFT</h4>

									<ul>



										<li><a href="#" data-toggle="modal" data-target="#exampleModal">Demostración</a></li>



									</ul>

								</div>

							</div> -->
<!-- ========================================================================== -->
							<div class="col1">

								<div class="h_nav">

									<h4>Herramientas</h4>

									<ul>

										<li><a href="https://www.metatrader4.com/es" target="_blank"> MT4</a></li>

										<li><a href="calculadora-trader">Calculadora Trader</a></li>

										<li><a href="https://www.autochartist.com/t" target="_blank">AutoChartist</a></li>

										<li><a href="https://www.tradingcentral.com/" target="_blank">Trading Central</a></li>

										<li><a href="https://t.me/+AvHGvz4XbxUxMjIx" target="_blank">Canal de Telegram</a></li>



									</ul>

								</div>

							</div>



						</div>

						<div class="row">

							<div class="col2"></div>

							<div class="col1"></div>

							<div class="col1"></div>

							<div class="col1"></div>

							<div class="col1"></div>

						</div>

					</div>

				</li>

				<li><a class="color5" href="#">Cuentas</a>

					<div class="megapanel">

						<div class="row">

							<div class="col1">

								<div class="h_nav">

									<h4>Cuentas ERC</h4>

									<ul>

										<li><a href="cuentas-erc">Cuentas ERC</a></li>





									</ul>

								</div>

							</div>

							<div class="col1">

								<div class="h_nav">

									<h4> Cuenta Estandar</h4>

									<ul>

										<li><a href="descripcion-estandar">Descripción</a></li>



									</ul>

								</div>

							</div>

							<div class="col1">

								<div class="h_nav">

									<h4>Cuenta Premium</h4>

									<ul>

										<li><a href="descripcion-premium">Descripción</a></li>



									</ul>

								</div>

							</div>

							<div class="col1">

								<div class="h_nav">

									<h4>Cuenta Profesional</h4>

									<ul>

										<li><a href="descripcion-profesional">Descripción</a></li>



									</ul>

								</div>

							</div>

							<div class="col1">

								<div class="h_nav">

									<h4>Cuenta de Lealtad</h4>

									<ul>



										<li><a href="recompensas-erc"> Recompensas ERC</a></li>

										<li><a href="negocio-erc">Refiere una Cuenta</a></li>



									</ul>

								</div>

							</div>



						</div>

						<div class="row">

							<div class="col2"></div>

							<div class="col1"></div>

							<div class="col1"></div>

							<div class="col1"></div>

							<div class="col1"></div>

						</div>

					</div>

				</li>

				<li><a class="color6" href="#">Productos</a>

					<div class="megapanel">

						<div class="row">

							<div class="col1">

								<div class="h_nav">

									<h4>PRODUCTOS DE INVERSIÓN</h4>

									<ul>

										<li><a href="forex">Forex</a></li>

										<li><a href="cfd">CFDs</a></li>

										<li><a href="indice-bruto">Índices Bursátiles</a></li>

										<li><a href="materia-primas">Materias Primas</a></li>

									</ul>

								</div>

							</div>

							<div class="col1">

								<div class="h_nav">

									<h4>Fondo de Cobertura</h4>

									<ul>

										<li><a href="fondo-de-cobertura">Fondo de Cobertura 360-y</a></li>

										<li><a href="cuenta-fondo-cobertura"> Cuenta Fondo de Cobertura</a></li>

										<li><a href="depositos-retiros">Depósitos/Retiros</a></li>



									</ul>

								</div>

							</div>

							<div class="col1">

								<div class="h_nav">

									<h4>Academia ERC</h4>

									<ul>

										<li><a href="eventos-y-webinarios">Eventos y Webinarios</a></li>

										<li><a href="cursos">Cursos</a></li>

										<li><a href="libros">Libros</a></li>

										<li><a href="herramientas-trading">Herramientas de Trading</a></li>

										<!--<li><a href="blog-y-noticias">Blog y Noticias</a></li>-->

										<li><a href="registro">Blog y Noticias</a></li>





									</ul>

								</div>

							</div>





						</div>

						<div class="row">

							<div class="col2"></div>

							<div class="col1"></div>

							<div class="col1"></div>

							<div class="col1"></div>

							<div class="col1"></div>

						</div>

					</div>

				</li>

				<li><a class="color9" href="negocio-erc">ERC Negocios</a>



				</li>



				<li><a class="color1 btn btn-primary" style="width:200px;" href="registro">Registrate</a></li>

			</ul>

		</div>

	</div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

	<div class="modal-dialog" role="document">

		<div class="modal-content">

			<div class="modal-header">

				<h3 class="modal-title text-center" id="exampleModalLabel">Bienvenidos</h3>

			</div>

			<div class="modal-body text-center">

				Para poder ver el demo de la pagina necesitas, aperturar tu cuenta

				<h2>sigue los siguientes pasos:</h2>

				<div class="row">

					<div class="col-lg-12" class="" style="padding:30px;">

						<div class="row">

							<div class="col-lg-6">

								<img src="vistas/img/registrarte1.png" style="width:150px;" alt="">

							</div>

							<div class="col-lg-6">

								<h4>1</h4>

								<h3 alling=center>Crea una cuenta </h3>

								<p class="text-center">Rellena el formulario y sube los documentos que se te solicitan.</p>

							</div>

						</div>

					</div>

					<div class="col-lg-12" class="" style="padding:30px;">

						<div class="row">

							<div class="col-lg-6">

								<img src="vistas/img/deposita1.png" style="width:150px;" alt="">

							</div>

							<div class="col-lg-6">

								<h4>2</h4>

								<h3 alling=center>Vincula tu cuenta bancaria </h3>

								<p class="text-center">Selecciona un método de depósito y coloca tu inversión.</p>

							</div>

						</div>

					</div>

					<div class="col-lg-12" class="" style="padding:30px;">

						<div class="row">

							<div class="col-lg-6">

								<img src="vistas/img/gana2.png" style="width:150px;" alt="">

							</div>

							<div class="col-lg-6">

								<h4>3</h4>

								<h3 alling=center>Comience a comprar y vender</h3>

								<p class="text-center">Visualiza tu dinero y empieza a operar. </p>

							</div>

						</div>

					</div>

				</div>

			</div>



			<div class="modal-footer">

				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

				<a href="registro" type="button" class="btn btn-primary">Aperturar Cuenta </a>

			</div>

		</div>

	</div>

</div>


<script src="vistas/js/menu.js"></script>