<?php

$usuario = "mkteam";
    $password = "M4rketing.digital";
    $servidor = "localhost";
    $BD = "tafer";


 /***CONEXIÓN EN BASE DE DATOS*/
 /**CHECAR CONEXIÓN**/
 $conection = mysqli_connect ($servidor, $usuario, $password, $BD);
$inc = include("conection.php");
/**CHECANDO SI EL USUARIO EXISTE**/

if(!isset($_SESSION['Fname'])){
    header('Location: perfil.php');
}

$id = $_POST['IdUser'];
function verificarUsuario($id){
    $sql_leer = 'SELECT Fname FROM users WHERE IdUser = '.$id.' AND Fname = '.$_SESSION['Fname'].'';

    $gsnet = $pdo->prepare($sql_leer);
    $gsnet->execute($id);

    if($gsnet->fetchColum() > 0)
    return true;
};

$sql_leer = 'SELECT Fname, Lname, Position, Phone, Email, Access FROM users WHERE Fname = '.$_SESSION['Fname'].'';

$gsnet = $pdo->prepare($sql_leer);
$gsnet->execute();

$resultado = $gsnet->fectAll();






    if($inc){
        $consulta = "SELECT Fname, Lname, Phone, Email, Access FROM users WHERE IdUser";
        $resultado = mysqli_query($conection, $consulta);

        if($resultado){
            while($row = $resultado->fetch_array()){
                $Fname = $row ['Fname'];
                $Lname = $row ['Lname'];
                $Phone = $row ['Phone'];
                $email = $row ['Email'];
                $Access = $row ['Access'];
                ?>
                <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
            <div class="perfil">
            <h1>PROFILE</h1>
            <div class="datos">
                <label>First Name:  </label> <br>
                <input type="text" disabled> <?php echo $resultado['Fname']; ?>
            </div>

            <div class="datos">
                <label>Last Name:</label> <br>
                <input type="text" disabled> <?php echo $resultado['Lname']; ?>
            </div>
            <div class="datos">
                <label for="">Email:</label> <br>
                <input type="email" disabled> <?php echo $resultado['Email']; ?>
            </div>
            <div class="datos">
                <label>Phone:</label> <br>
                <input type="text" disabled> <?php echo $resultado['Phone']; ?>
            </div>
            <div class="datos">
                <label>Type of User: </label> <br>
               <input type="text" disabled> <?php echo $resultado['Access']; ?>
            </div>
            

        </div>
<?php



            }
        }

    }
?>