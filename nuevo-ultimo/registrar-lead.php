<?php
   include("conection.php");
   $Fname = $_POST['FNAME'];
   $Lname = $_POST['LNAME'];
   $phone = $_POST['PHONE'];
   $email = $_POST['EMAIL'];
    

    $usuario = "mkteam";
    $password = "M4rketing.digital";
    $servidor = "localhost";
    $BD = "tafer";


     /***CONEXIÓN EN BASE DE DATOS*/
     /**CHECAR CONEXIÓN**/
     $conection = mysqli_connect ($servidor, $usuario, $password, $BD);

     
       if (!empty($_POST['FNAME']) && !empty($_POST['LNAME']) &&
           !empty($_POST['PHONE']) && !empty($_POST['EMAIL'])){
             $consulta = "INSERT INTO leads (Fname, Lname, Phone, Email) VALUES ('$Fname', '$Lname','$phone','$email')";
             $resultado = mysqli_query($conection, $consulta);
             echo "inserte los datos";
             header("location: thank-you.html");
            

           }else {
            
             echo "Error al Enviar los Datos";
             mysqli_error($conection);
           }
   
               mysqli_close($conection);
   
?>