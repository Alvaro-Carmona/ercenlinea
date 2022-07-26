
<?php


$fileName = $_FILES['posterior']['name']; 
    
    if (($_FILES["posterior"]["type"] == "image/jpeg") || 
        ($_FILES["posterior"]["type"] == "image/png")  || 
        ($_FILES["posterior"]["type"] == "image/jpg")  || 
        ($_FILES["posterior"]["type"] == "application/pdf") || 
        ($_FILES["posterior"]["type"] == "image/JPG")  || 
        ($_FILES["posterior"]["type"] == "image/PNG")  || 
        ($_FILES["posterior"]["type"] == "image/JPEG") || 
        ($_FILES["posterior"]["type"] == "application/PDF") ) {
        if (move_uploaded_file($_FILES["posterior"]["tmp_name"], "../vistas/img/documentos/".$fileName)) {
             echo 1;
        } else {
            echo 0;
        }
    }

    
    
            
                            
    
    
    
    
    
    
    
    
    
                     
                          
                    