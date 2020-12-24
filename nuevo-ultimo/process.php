<?php
//Si se quiere subir una imagen
if(isset($_POST['subir'])){
    //Se recoge el archivo del formulario
    $archivo = $_FILES['image'] ['name'];
    //Si el archivo contiene algo y es diferente de vacio
    if(isset($archivo) && $archivo != ""){
        //Obtenemos los datos necesarios del archivo
        $tipo = $_FILES['image']['type'];
        $tamano = $_FILES['image']['size'];
        $temp = $_FILES['image']['tmp_name'];
        //Formatos soportados
        $supported_files = ["images/jpeg", "images/png", "images/gif"];
        //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
        if(!(strpos($tipo, $supported_files) && ($tamano <2000000))){
            echo '<div> <b> Error. La extensión o el tamaño de los archivos no es correcta. <br/>
            *Se permiten archivos .gif, .jpg, .png y de 200 KB como máximo. </b> </div>';
        }
        else{
            //Si la imagen es correcta en tamaño y tipo
            //Se intenta subir al servidor
            if(move_uploaded_file($temp, 'img/'.$archivo)){
                //Cambiamos los permisos del archivo 777 para poder modificarlo posteriormente
                chmod('img/'.$archivo, 0777);
                //Mostramos el mensaje de que se subió con éxito
                echo '<div> <b> Se ha subido correctamente la imagen.</b></div>';
                //Mostramos la imagen
                echo '<p><img src="img/'.$archivo'"></p>';
            }
            else{
                //Si no se ha podido subir la imagen, mostramos un mensaje de error
                echo '<div><b>Ocurrió un error al subir el fichero. No pudo guardarse.</b></div>';
            }
        }
    }
}




 /*
try{
    if(isset($_FILES["image"])){
      echo "<pre>";
       var_dump($_FILES);
       echo "</pre>";
       
      
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


*/


?>