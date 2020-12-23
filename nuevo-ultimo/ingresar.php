<?php 
include('conection.php');
$usu = $_POST['usuario'];
$contrasena = $_POST ['contrasena']; 


$usuario = "root";
$password = "";
$servidor = "localhost";
$BD = "tafer";

$conection = mysqli_connect ($servidor, $usuario, $password, $BD);

session_start();
$error = '';


/*
if(isset($_POST['submit'])){
    if(empty($_POST['usuario']) || empty($_POST['contrasena'])){
        $error = "Username or Password is invalid";
    }
    else {
        

        $usu = mysqli_real_escape_string($conection, (strip_tags($usu,ENT_QUOTES)));
        $contrasena = sha1($contrasena);

        $sql = "SELECT Fname, Pass, Access FROM users WHERE Fname = ' " .$usu. "' AND Pass = '" .$contrasena. "';";
        $query = mysqli_query($conection, $sql);
        $counter = mysqli_num_rows($query);

        if($counter == 1){
            $_SESSION['login_user_sys']=$usu;
            header("Location:perfil.php");
        } else {
            $error = "Username or Password is invalid";
        }
    }
}
*/

//VALIDAR LA CONEXIÓN DE BASE DE DATOS
if($conection ->connect_error){
    die("Conection failed: " .$conection->connect_error);
}

//CONSULTA SEGURA PARA EVITAR INYECCIONES SQL

$sql = sprintf("SELECT Fname, Pass, Access FROM users WHERE Fname ='%s' AND Pass = '%s'", mysqli_real_escape_string($usu), mysqli_real_escape_string($contrasena));
$resultado = $conection->query($sql);
if ($resultado = $usu && $resultado = $contrasena && $resultado = 'ADMINISTRADOR'){
    header("Location:vista-admin.php");

}elseif ($resultado = $usu && $resultado = $contrasena && $resultado = 'EDITOR'){
    header("Location:perfil.php");
}else {
    echo"<h1> Usuario no valido";
}
//VERIFICANDO SI EL USUARIO EXISTE EN LA BASE DE DATOS
if($resultado){
    $_SESSION['Fname'] = $usu;

    //REDIRECCIONAMOS 
    header("Location:perfil.php");
} else{
    echo'El usuario no es valido, <a href="login.php"> intenta de nuevo </a>.<br/>';
}



mysqli_close($conection);
