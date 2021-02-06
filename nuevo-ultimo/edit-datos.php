<?php
include('conection.php');
$usuario = "root";
$password = "";
$servidor = "localhost";
$BD = "tafer";



$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$email = $_POST['Email'];
$phone = $_POST['phone'];
$type = $_POST['Users'];
$id = $_POST['IdUser'];
$conection = mysqli_connect ($servidor, $usuario, $password, $BD);

session_start();
$error = '';

$consulta = "UPDATE users SET Fname  = '$Fname', Lname = '$Lname',Phone = '$phone', Email = '$email', Access = '$type' WHERE IdUser = '$id' ";
$resultado = mysqli_query($conection, $consulta);
echo "Modificación Correcta";
header("location: perfil.php");


 ?>
