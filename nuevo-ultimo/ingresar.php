<?php 
include('conection.php');

$usuario = "root";
$password = "";
$servidor = "localhost";
$BD = "tafer";

$conection = mysqli_connect ($servidor, $usuario, $password, $BD);

$usu = $_POST['usuario'];
$contrasena = $_POST ['contrasena'];

session_start();

$_SESSION['usuario'] = $usuario;
$_SESSION['contrasena'] = $contrasena;


$consulta = "SELECT * FROM users where Access = '$usu ' and  Pass = '$contrasena'";
$resultado = mysqli_query($conection, $consulta);

$filas = mysqli_fetch_array($resultado);

if ($filas['Fname']= $usuario && $filas['Pass'] = $contrasena && $filas['Access']  = 'ADMINISTRADOR'){
    header("location: vista-admin.php");

}elseif ($filas['Fname']= $usuario && $filas[ 'Pass'] = $contrasena && $filas['Access']  = 'EDITOR'){
    header("location: perfil.php");
}
else{
    echo '<script languaje = "javascript"> alert ("ERROR EN LA AUTENTIFICACIÓN"); </script>';
    mysqli_error($conection);
}

/*

if($filas ['Access'] = 'ADMINISTRADOR'){
    header("location:vista-admin.php");
}
else if($filas['Access'] = 'EDITOR') {
    header("location:perfil.php");
}
else{
    mysqli_error($conection);
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class = "bad" >ERROR EN LA AUTENTIFICACIÓN</h1>
    <?php
}*/
mysqli_free_result($resultado);
mysqli_close($conection);
