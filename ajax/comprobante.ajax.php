<?php

    $fileName = $_FILES['comprobante']['name']; 
    
if (($_FILES["comprobante"]["type"] == "image/jpeg") || 
    ($_FILES["comprobante"]["type"] == "image/png")  || 
    ($_FILES["comprobante"]["type"] == "image/jpg")  || 
    ($_FILES["comprobante"]["type"] == "application/pdf") || 
    ($_FILES["comprobante"]["type"] == "image/JPG")  || 
    ($_FILES["comprobante"]["type"] == "image/PNG")  || 
    ($_FILES["comprobante"]["type"] == "image/JPEG") || 
    ($_FILES["comprobante"]["type"] == "application/PDF") ) {
    if (move_uploaded_file($_FILES["comprobante"]["tmp_name"], "../vistas/img/documentos/".$fileName)) {
         echo 1;
    } else {
        echo 0;
    }
}
