<?php
include_once("conection.php");
    $usuario = "root";
    $password = "";
    $servidor = "localhost";
    $BD = "tafer";
$conection = mysqli_connect ($servidor, $usuario, $password, $BD);

if($_REQUEST['empid']){
    $sql = "SELECT IdUser, Fname, Lname, Phone, Email, Access from users WHERE IdUser='".$_REQUEST['empid']."'";
    $resultset = mysqli_query($conection, $sql) or die ("database error: " .mysqli_error($conection));

    $data = array();
    while ($rows = mysqli_fetch_assoc($resultset)){
        $data = $rows;
    }
    echo json_encode($data);
}else{
    echo 0;
}



?>