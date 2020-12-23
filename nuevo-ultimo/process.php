<?php

try{
    if(isset($_FILES["image"])){
      /* echo "<pre>";
       var_dump($_FILES);
       echo "</pre>";*/
       
      
       $supported_files = ["images/jpeg", "images/png", "images/gif"];
       $image = $_FILES["image"];

       if(in_array($image["type"], $supported_files)){
            $tmp_name = $image["tmp_name"];
            $name = $image["name"];
            $path = "img/$name";
            move_uploaded_file($tmp_name, $path);
            echo "true";
       }
       else{
           throw new Exception("Por favor sube una imagen valida");
           
       }
       

    }
    else{
        throw new Exception("No se ha subido ninguna imagen");
    }
}
catch (Exception $e){
 echo $e->getMessage();
}





?>