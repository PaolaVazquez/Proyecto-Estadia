<?php
    include("conection.php");

    if(isset($_POST['register'])){
        if(strlen($_POST['FNAME']) < 1 && strlen($_POST['LNAME']) < 1 && strlen($_POST['PHONE']) < 1 && strlen($_POST['EMAIL'])){
            $Lname = trim($_POST['FNAME']);
            $Fname = trim($_POST['LNAME']);
            $phone = trim($_POST['PHONE']);
            $email = trim($_POST['EMAIL']);
            $fechareg = date("d/m/y");

            $consulta = "INSERT INTO leads(Fname, Lname, Phone, Email, fecha-reg) VALUES ('$Lname', '$Fname', '$phone', '$email', $fechareg)";

            $resultado = mysql_query($conectar, $consulta);

            if($resultado){
                echo "Registrado con éxito";
            }
            else{
                echo "No se registro";
            }

        }
    }
?>