<?php
   include("conection.php");
   $Fname = $_POST['FNAME'];
   $Lname = $_POST['LNAME'];
   $phone = $_POST['PHONE'];
   $email = $_POST['EMAIL'];
    

    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $BD = "tafer";


     /***CONEXIÓN EN BASE DE DATOS*/
     /**CHECAR CONEXIÓN**/
     $conection = mysqli_connect ($servidor, $usuario, $password, $BD);

     
       if (!empty($_POST['FNAME']) && !empty($_POST['LNAME']) &&
           !empty($_POST['PHONE']) && !empty($_POST['EMAIL'])){
             $consulta = "INSERT INTO leads VALUES ('$Fname', '$Lname','$phone','$email')";
             $resultado = mysqli_query($conection, $consulta);
             echo "inserte los datos";
   
           }else {
             echo "Error al Enviar los Datos";
           }
   
               mysqli_close($conection);
   
?>