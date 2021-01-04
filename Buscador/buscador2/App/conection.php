<?php
function conectar(){
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "instanceexperience";
    $con = mysql_conect($server, $user, $pass) or die ("Error al conectar a la base de datos".mysql_error());

    mysql_selectdb($db, $con);

    return $con;
}
?>
