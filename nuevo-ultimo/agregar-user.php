<?php
   include("conection.php");
   $Fname = $_POST['FNAME'];
   $Lname = $_POST['LNAME'];
   $phone = $_POST['PHONE'];
   $email = $_POST['EMAIL'];
   $pass = $_POST['PASSWORD'];
   $puesto = $_POST['POSITION'];
   $type = $_POST['ACCESS'];

    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $BD = "tafer";


     /***CONEXIÓN EN BASE DE DATOS*/
     /**CHECAR CONEXIÓN**/
     $conection = mysqli_connect ($servidor, $usuario, $password, $BD);



/**COMPROBAR SI EL USUARIO YA FUE REGISTRADO**/
  if(!empty($Fname) && !empty($Lname)){
    usuarioRegistrado($Fname, $Lname);
  }



  /**INGRESAR DATOS DE LOS USUARIOS**/
       if (!empty($_POST['FNAME']) && !empty($_POST['LNAME']) &&
            !empty($_POST['PASSWORD']) &&!empty($_POST['POSITION']) && 
            !empty($_POST['PHONE']) && !empty($_POST['EMAIL']) && 
           !empty($_POST['ACCESS'])){
             $consulta = "INSERT INTO users (Fname, Lname, Pass, Position, Phone, Email, Access) VALUES ('$Fname', '$Lname','$pass', '$puesto', '$phone', '$email','$type')";
             $resultado = mysqli_query($conection, $consulta);
             echo "inserte los datos";
             header("location: agregar.php");
            

           }else {
            
             echo "Error al Enviar los Datos";
             mysqli_error($conection);
           }
/**FUNCIÓN PARA COMPROBAR QUE EL USUARIO NO ES REPLICADO**/
           function usuarioRegistrado($Fname, $Lname){
            $conection = mysqli_connect ($servidor, $usuario, $password, $BD);
             $sql = "SELECT * FROM users where Fname = '$Fname', and Lname = '$Lname'";
             $result = mysqli_query($conection, $sql);
             $contar = mysqli_num_rows($result);
             if($contar == 0){
               echo '<script languaje="javascript"> alert("Usuario registrado con éxito "); </script>';
             }
             else{
               echo '<script languaje="javascript"> alert("Usuario ya registrado"); </script>';
             }
           }
   
        

   
?>