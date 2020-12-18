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
    $consulta = "SELECT * FROM leads";
    $resultado = mysqli_query($conection, $consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $ID = $row ['IdLead'];
            $Fname = $row ['Fname'];
            $Lname = $row ['Lname'];
            $phone = $row ['Phone'];
            $email = $row ['Email'];
            $fecha = $row ['fecha-reg'];
            ?>
            <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

                <tr>
                      <td><?php echo $ID;?></td>
                      <td><?php echo $Fname;?></td>
                      <td><?php echo $Lname;?></td>
                      <td><?php echo $phone;?></td>
                      <td><?php echo $email;?></td>
                      <td><?php echo $fecha;?></td>
                      

                  </tr>

            <?php
        }
    }

}




?>