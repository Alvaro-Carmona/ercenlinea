<?php

    $fileName = $_FILES['frontal']['name']; 
    
if (($_FILES["frontal"]["type"] == "image/jpeg") || 
    ($_FILES["frontal"]["type"] == "image/png")  || 
    ($_FILES["frontal"]["type"] == "image/jpg")  || 
    ($_FILES["frontal"]["type"] == "application/pdf") || 
    ($_FILES["frontal"]["type"] == "image/JPG")  || 
    ($_FILES["frontal"]["type"] == "image/PNG")  || 
    ($_FILES["frontal"]["type"] == "image/JPEG") || 
    ($_FILES["frontal"]["type"] == "application/PDF") ) {
    if (move_uploaded_file($_FILES["frontal"]["tmp_name"], "../vistas/img/documentos/".$fileName)) {
         echo 1;
    } else {
        echo 0;
    }
}
