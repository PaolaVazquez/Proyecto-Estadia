<?php
include('conection.php');
$usuario = "root";
$password = "";
$servidor = "localhost";
$BD = "tafer";



$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$type = $_POST['Users'];
$conection = mysqli_connect ($servidor, $usuario, $password, $BD);

session_start();
$error = '';

$consulta = "UPDATE users SET Fname  = '$Fname', Lname = '$Lname',Phone = '$phone', Email = '$email', Access = '$type' ";
$resultado = mysqli_query($conection, $consulta);
echo "inserte los datos";
header("location: agregar.php");

 ?>
