<?php
    include_once("conection.php");

    $mysqli = 

    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $BD = "tafer";
    $conection = mysqli_connect ($servidor, $usuario, $password, $BD);

    $salida = "";
    $query = "SELECT * FROM leads ORDER By IdLead";

    if(isset($_POST['consulta'])){
        $q = $conection->real_escape_string($_POST['consulta']);
        $query = "SELECT IdLead, Fname, Lname, Phone, Email, fecha-reg WHERE Fname LIKE '%".$q."%' OR Lname LIKE '%".$q."%', OR Phone LIKE '%".$q."%' OR Email LIKE '%".$q."' OR fecha-reg LIKE '%".$q."'";
        
        
    }
    $resultado = $conection->query($query);

        if($resultado->num_rows > 0){
            $salida.="<table  border='1' class ='tabla_datos'>
            <thead >
                <tr>
                    <th>ID-Lead</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone</th>
                    <th>E-mail</th>
                    <th>Date Register</th>
    
                </tr>
            </thead>
            <tbody>";
            while($fila = $resultado->fetch_assoc()){
                $salida.="<tr>
                        <td>".$fila['IdLead']."</td>
                        <td>".$fila['Fname']."</td>
                        <td>".$fila['Lname']."</td>
                        <td>".$fila['Phone']."</td>
                        <td>".$fila['Email']."</td>
                        <td>".$fila['fecha-reg']."</td>
                </tr>";
            }
            $salida.="</tbody> </table>";
    
    }else{
        $salida.="0 results";
        
    }
    echo $salida;
    $conection->close();

    



?>