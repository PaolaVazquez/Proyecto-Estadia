<?php
include('conection.php');
session_start();



$usuario = "root";
$password = "";
$servidor = "localhost";
$BD = "tafer";

$conection = new mysqli ($servidor, $usuario, $password, $BD);


$error = '';




//VALIDAR LA CONEXIÓN DE BASE DE DATOS
if($conection ->connect_error){
    die("Conection failed: " .$conection->connect_error);
}
/*if (isset($_POST['login'])) {*/
  $usu = $_POST['usuario'];
  $contrasena = $_POST ['contrasena'];

$sql = sprintf("SELECT * FROM users WHERE Fname='%s' AND Pass='%s'", mysqli_real_escape_string($usu), mysqli_real_escape_string($contrasena));
$resultado = $conection->query($sql);

if ($resultado) {
  $_SESSION['Fname']=$Fname;

  header("HTTP/1.1 302 Moved Temporarily");
  header("Location:wep-edit.html");
}else {
  echo 'El nombre o contraseña son incorrectos, <a href="index.html>Vuelve a intentarlo</a>. <br/>"';
}
/*  $query = $conection->prepare("SELECT * FROM users WHERE Fname=:usuario");
  $query->bindParam("usuario",$usu, PDO::PARAM_STR);
  $query->execute();

  $resultado = $query->fetch(PDO::FETCH_ASSOC);

  if (!$resultado) {
    echo '<p class="error"> Username, password combination is wrong!</p>';
  }else {
    if (password_verify($contrasena, $resultado['Pass'])) {
      $_SESSION['IdUser'] = $resultado['ID'];
      echo '<p class="success"> Congratulations, you are logged in!</p>';
      header('Location:perfil.php');
    }else {
        echo '<p class="error"> Username, password combination is wrong!</p>';
    }
  }
}
*/

mysqli_close($conection);
?>
