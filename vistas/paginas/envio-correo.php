<?php

 /*=============================================
    VERIFICACIÓN CORREO ELECTRÓNICO
    =============================================*/

    date_default_timezone_set("America/Mexico_City");

    

    $mail = new PHPMailer;

    $mail->CharSet = 'UTF-8';

    $mail->isMail();

    $mail->setFrom('support@ercglobalmarkets.com', 'Soporte ERC');

    $mail->addReplyTo('support@ercglobalmarkets.com', 'Soporte ERC');

    $mail->Subject = "Bienvenido a ERC GLOBAL MARKETS";

    $mail->addAddress($_GET["email"]);

    $mail->msgHTML('<!DOCTYPE html>
    <html>
    <head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style type="text/css">
        /* FONTS */
        @import url("https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i");
    
        /* CLIENT-SPECIFIC STYLES */
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; }
    
        /* RESET STYLES */
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
    
        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }
    
        /* MOBILE STYLES */
        @media screen and (max-width:600px){
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }
    
        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] { margin: 0 !important; }
    </style>
    </head>
    <body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">
    
   
    
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <!-- LOGO -->
        <tr>
            <td align="center">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="center" valign="top" width="600">
                <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td align="center" valign="top" style="padding: 40px 10px 10px 10px;">
                            <a href="#" target="_blank" style="text-decoration: none;">
                              <img src="https://ercglobalmarkets.com/vistas/img/mailing/logo.png" style="width:80%;" alt="">
                            </a>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
            </td>
        </tr>
        <!-- HERO -->
        <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="center" valign="top" width="600">
                <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                    <tr>
                        <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: "Poppins", sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
                          <h1 style="font-size: 36px; font-weight: 600; margin: 0; color:#0084CB;">Gracias por Registrarte </h1>
                          <h3 style="font-size: 20px; font-weight: 600; margin: 0; color:#7a7a7a;">tus Documentos se están Verificando </h3>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
            </td>
        </tr>
        <!-- COPY BLOCK -->
        <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
                <!--[if (gte mso 9)|(IE)]>
                <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                <tr>
                <td align="center" valign="top" width="600">
                <![endif]-->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                  <!-- COPY -->
                  
                  <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 0px 0px 0px 0px;">
                      <a href="#" target="_blank">
                          <img alt="Product update video" src="https://ercglobalmarkets.com/vistas/img/mailing/fondo-bienvenida.png" width="600" style="display: block; width: 100%; max-width: 100%; min-width: 100px; font-family: "Poppins", sans-serif; color: #ffffff; font-size: 18px;" border="0">
                      </a>
                    </td>
                  </tr>
                  <!-- COPY -->
                  <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 40px 30px 40px 30px; color: #666666; font-family: "Poppins", sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
                      <p style="font-size: 20px; font-weight: 600; margin: 0; color:#7a7a7a; text-align: center;">Para aclaraciones y comentarios por favor comunicate a nuestro departamento de Atención a Clientes</p>
                    </td>
                  </tr>
                  <!-- COPY HEADING -->
                  <tr style="margin-bottom: 50px;">

                    <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #111111; font-family: "Poppins", sans-serif; font-size: 18px; font-weight: 400; line-height: 25px; text-align: center; margin-bottom: 50px;">
                      <h2 style="font-size: 20px; font-weight: 400; margin: 0; text-align: center;"><a href="mailto:info@ercglobalmarkets.com"> info@ercglobalmarkets.com</a></h2>
                      <br>
                      <h2 style="font-size: 20px; font-weight: 400; margin: 0; text-align: center;"> <a href="tel:+525514163994">+(52) 55 1416 3994</a></h2>
                    </td>

                  </tr>
                  <!-- COPY -->
                  
                </table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
            </td>
        </tr>
       
    </table>
    
    </body>
    </html>');

    $envio = $mail->Send();

    if(!$envio){

        echo '<script> 

            swal({
                  title: "¡ERROR!",
                  text: "¡Hubo un error al enviar el correo de bienvenida, comuniquese a support@ercglobalmarkets.com!",
                  type:"error",
                  confirmButtonText: "Cerrar",
                  closeOnConfirm: false
                },

                function(isConfirm){

                    if(isConfirm){
                        window:location="inicio";
                    }
            });

        </script>';

    }else{

        echo '<script> 

            swal({
                  title: "¡OK!",
                  text: "¡Bienvenido a ERC GLOBAL MARKETS, agradecemos tu registro. Se ha enviado un correo de bienvenida a '.$_GET["correo"].'. ",
                  type:"success",
                  confirmButtonText: "Cerrar",
                  closeOnConfirm: false
                },

                function(isConfirm){

                    if(isConfirm){
                        window:location="inicio";
                    }
            });

        </script>';

    }


?>