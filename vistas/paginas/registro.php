<link rel="stylesheet" href="vistas/css/botones.css">
<link href="vistas/css/style3.css" rel="stylesheet" type="text/css" media="all" />
<div class="w3ls-form" style="	margin-top: 50px;">

    <form action="#" medthod="post">
        <div class="datos-personales">
            <div class="w3l-head text-center">
                <img src="vistas/img/logo-erc.png" alt="">
                <h1 style="color:#fff;">Step 1. Informacion Personal</h1>
            </div>
            <div class="w3l-last-grid1">
                <div class="w3l-grid1">
                    <label class="text">Nombre</label>
                    <div class="w3l-div">
                        <?php if (isset($_COOKIE["patrocinador"])) : ?>

                            <input type="hidden" value="<?php echo $_COOKIE["patrocinador"]; ?>" id="patrocinador">

                        <?php else : ?>

                            <input type="hidden" value="eart-coins" id="patrocinador">

                        <?php endif ?>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="nombre" placeholder="Nombre" required="" />
                    </div>
                </div>
                <div class="w3l-grid2">
                    <label class="text">Apellidos</label>
                    <div class="w3l-div">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="apellidos" placeholder="Apellidos" required="" />
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="w3l-last-grid1">
                <div class="w3l-grid1">
                    <label class="text">Genero</label>
                    <div class="w3l-div">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select class="form-control" id="genero" required="">
                            <option selected disabled>--Selecciona tu Genero--</option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="w3l-grid2">
                    <label class="text">Fecha de Nacimiento</label>
                    <div class="w3l-div">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" class="date" id="datepicker" name="datebirth" placeholder="dob" value="MM/DD/YYYY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'MM/DD/YYYY';}" required="" />
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="w3l-last-grid1">
                <div class="w3l-grid1">
                    <label class="text">Correo</label>
                    <div class="w3l-div">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" name="email" id="email" placeholder="e-mail" required="" />
                    </div>
                </div>
                <div class="w3l-grid1">
                    <label class="text">Verifica tu Correo</label>
                    <div class="w3l-div">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="email" name="email" id="verificaremail" placeholder="e-mail" required="" />
                    </div>
                </div>
                <div class="w3l-grid1">
                    <label class="text">Pais</label>
                    <div class="w3l-div">
                        <i class="fa fa-flag" aria-hidden="true"></i>

                        <select class="form-control" required="" id="inputPais">
                            <option selected disabled>--Selecciona tu Pais--</option>

                        </select>
                    </div>
                </div>

                <div class="w3l-grid1">
                    <label class="text">Cuenta ERC</label>
                    <div class="w3l-div">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <input type="text" id="cuenta" value="Estandar" required="" readonly />
                    </div>
                </div>

                <div class="w3l-grid2">
                    <label class="text">Telefono</label>
                    <div class="w3l-div">
                        <i class="fa fa-phone " aria-hidden="true"></i>

                        <input type="text" minlength="7" maxlength="15" id="telefono" class="dialCode" data-inputmask="'mask':'(999) 999-9999'" data-mask placeholder="numero de telefono" required="" />
                    </div>
                </div>
                <div class="w3l-grid2">
                    <label class="text">
                        Plataforma ERC</label>
                    <div class="w3l-div">
                        <i class="fa fa-id-card" aria-hidden="true"></i>
                        <select class="form-control" id="plataforma" required="">
                            <option selected disabled>--Selecciona tu Plataforma ERC--</option>
                            <option value="cfd">CFDs Plataforma</option>
                            <option value="cripto">Cripto Plataforma</option>
                            <option value="nft">NFT Plataforma</option>
                        </select>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="w3ls-submit">
                    <input style="background-color: 0084CB;" type="button" class="siguiente1" value="Siguiente">
                </div>
            </div>
        </div>
        <div class="direccion" style="display: none;">
            <div class="w3l-head text-center">
                <img src="vistas/img/logo-erc.png" alt="">
                <h1 style="color:#fff;">Paso 2. Direccion y Documentacion</h1>
            </div>

            <div class="w3l-last-grid1">
                <div class="w3l-grid1">
                    <label class="text">Direccion</label>
                    <div class="w3l-div">
                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        <input type="text" id="direccion" placeholder="direccion" required="" />
                    </div>
                </div>
                <div class="w3l-grid2">
                    <label class="text">Ciudad/Estado</label>
                    <div class="w3l-div">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <input type="text" id="ciudad" placeholder="Ciudad/Estado" required="" />
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="w3l-right-grid1">
                <div class="w3l-grid2">
                    <label class="text">Codigo Postal</label>
                    <div class="w3l-div">
                        <i class="fa fa-address-card-o" aria-hidden="true"></i>
                        <input type="text" id="cp" placeholder="postal" required="" />
                    </div>
                </div>
                <div class="w3l-grid1">
                    <label class="text">
                        Documento de ID</label>
                    <div class="w3l-div">
                        <i class="fa fa-id-card" aria-hidden="true"></i>
                        <select class="form-control" required="" id="documento-id">
                            <option selected disabled>--Selecciona tu Documento de Identificacion--</option>
                            <option value="cedula">Cedula de Identificacion </option>
                            <option value="identificacion">Identificacion Oficial</option>
                            <option value="licencia">Licencia de Conducir</option>
                            <option value="pasaporte">Pasaporte</option>
                        </select>
                    </div>
                </div>
                <div class="frontal-trasera" style="display:none;">
                    <div class="row">
                        <div class="col-lg-12 text-left">
                            <label class="text"> Imagen Documento Frontal</label>
                            <div class="">
                                <input type="file" class="dropify" data-max-file-size="5M" id="frontal" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label class="text"> Imagen Trasera Documento</label>
                            <div class="card-body">
                                <input type="file" class="dropify" data-max-file-size="5M" id="trasera" required>
                            </div>
                        </div>
                        <br>
                        <div class="col-lg-12">
                            <label class="text">
                                Comprobante de Domicilio</label>
                            <div class="card-body">
                                <input type="file" class="dropify" data-max-file-size="5M" id="comprobante" required>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="frontal" style="display:none;">
                    <div class="col-lg-12">
                        <label class="text"> Imagen Documento Frontal </label>
                        <div class="card-body">
                            <input type="file" class="dropify" data-max-file-size="5M" id="frontal" required>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <label class="text">
                            Comprobante de Domicilio</label>
                        <div class="card-body">
                            <input type="file" class="dropify" data-max-file-size="5M" id="comprobante" required>
                        </div>
                    </div>

                </div>

                <div class="w3l-grid1" style="padding-top:30px;">
                    <label class="text">Industria/Sector</label>
                    <div class="w3l-div">
                        <i class="fa fa-id-card" aria-hidden="true"></i>
                        <select class="form-control" id="inputProfesiones" required="">
                            <option selected disabled>--Selecciona tu Sector--</option>

                        </select>
                    </div>
                </div>
                <div class="w3l-grid2" style="padding-top:30px;">
                    <label class="text">Profesion</label>
                    <div class="w3l-div">
                        <i class="fa fa-address-card-o" aria-hidden="true"></i>
                        <input type="text" id="profesion" placeholder="Profesion" required="" />
                    </div>
                </div>
                <div class="w3l-grid1" style="margin-top:30px;">
                    <label class="text">¿Eres residente de Estados Unidos de America?</label>
                    <ul class="radio-section">
                        <li>
                            <input type="radio" id="a-option" value="si" name="selector1">
                            <label for="a-option" style="color:#fff; font-weight: 800;">Si</label>
                            <div class="check"></div>
                        </li>
                        <li>
                            <input type="radio" id="b-option" value="no" name="selector1">
                            <label for="b-option" style="color:#fff; font-weight: 800;">No</label>
                            <div class="check">
                                <div class="inside"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="w3l-grid2" style="margin:30px 0px;">
                    <label class="text">¿Eres el beneficiario de los fondos a utlizar en ERC?</label>
                    <ul class="radio-section">
                        <li>
                            <input type="radio" id="a-option1" name="selector2" value="si">
                            <label for="a-option" style="color:#fff; font-weight: 800;">Si</label>
                            <div class="check"></div>
                        </li>
                        <li>
                            <input type="radio" id="b-option1" name="selector2" value="no">
                            <label for="b-option" style="color:#fff; font-weight: 800;">No</label>
                            <div class="check">
                                <div class="inside"></div>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="clear"></div>


            </div>
            <div class="info-legal" style="margin:30px 0px;">
                <div class="col-lg-12">


                    <div class="checkbox" style="width:100%;">

                        <input type="checkbox" id="aceptarTerminos">

                        <label for="aceptarTerminos" style="color:#fff; font-size:20px;">
                            <span>Acepto los términos y condiciones y la Política de Privacidad y doy mi consentimiento para
                                tratar mis datos personales.</span>
                        </label>
                        <br>

                    </div>
                    <br>
                    <div class="checkbox" style="width:100%;">

                        <input type="checkbox" id="aceptarTerminos2">

                        <label for="aceptarTerminos" style="color:#fff; font-size:20px;">
                            <span>
                                Confirmo que esta cuenta de trading solo la controlo yo.</span>
                        </label>
                        <br>

                    </div>


                </div>

            </div>
            <div class="w3ls-submit">
                <input type="button" class="anterior" value="Anterior">
                <input type="button" class="guardarRegistro" value="Aperturar Cuenta">
            </div>
        </div>
    </form>
</div>