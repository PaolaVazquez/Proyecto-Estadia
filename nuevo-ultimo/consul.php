<?php
$caja_busqueda = $_POST["caja_busqueda"];
$message = "";



    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $BD = "tafer";
require("conection.php");
$conection = mysqli_connect ($servidor, $usuario, $password, $BD);

$sql = mysqli_query($conection, "SELECT * FROM leads WHERE Fname LIKE '%$caja_busqueda%' OR LIKE '%$caja_busqueda%'");


while($resul = mysqli_fecth_array($sql)){
    $Fname = $resul['Fname'];
    $Lname = $resul['Lname'];
    $phone = $resul['Phone'];
    $email = $resul['Email'];
    $fecha_reg = $resul['fecha-reg'];
    $message.='<tr>
                <td>'.$Fname.'</td>
                <td>'.$Lname.'</td>
                <td>'.$phone.'</td>
                <td>'.$email.'</td>
                <td>'.$fecha_reg.'</td>
            </tr>';
}
echo $message;



?>
