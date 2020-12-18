<?php

$usuario = "root";
$password = "";
$servidor = "localhost";
$BD = "tafer";


 /***CONEXIÓN EN BASE DE DATOS*/
 /**CHECAR CONEXIÓN**/
 $conection = mysqli_connect ($servidor, $usuario, $password, $BD);
$inc = include("conection.php");
    if($inc){
        $consulta = "SELECT Fname, Lname, Phone, Email, Access FROM users";
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
                <input type="text" disabled> <?php echo $Fname; ?>
            </div>

            <div class="datos">
                <label>Last Name:</label> <br>
                <input type="text" disabled> <?php echo $Lname; ?>
            </div>
            <div class="datos">
                <label for="">Email:</label> <br>
                <input type="email" disabled> <?php echo $email; ?>
            </div>
            <div class="datos">
                <label>Phone:</label> <br>
                <input type="text" disabled> <?php echo $Phone; ?>
            </div>
            <div class="datos">
                <label>Type of User: </label> <br>
               <input type="text" disabled> <?php echo $Access; ?>
            </div>
            

        </div>
<?php



            }
        }

    }
?>