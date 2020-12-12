<?php 

$usuario = $_POST['usuario'];
$contrasena = $_POST ['contrasena'];

session_start();
$_SESSION['usuario'] = $usuario;

include('conection.php');

    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $BD = "tafer";

    $conection = mysqli_connect ($servidor, $usuario, $password, $BD);



$consulta = "SELECT * FROM user where Acces = '$usuario ' and  Password = '$contrasena";
$resultado = mysqli_query($conection, $consulta);

$filas = mysqli_fetch_array($resultado);

if($filas ['Acces'] == 'ADMINISTRADOR'){
    header("location:vista-admin.php");
}
else if($filas['Access'] == 'EDITOR') {
    header("location:perfil.php");
}
else{
    
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class = "bad" >ERROR EN LA AUTENTIFICACIÓN</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conection);
