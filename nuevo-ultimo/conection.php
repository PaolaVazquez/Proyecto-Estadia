<?php
function conectar(){
    $user = "mkteam";
    $pass = "M4rketing.digital";
    $server = "localhost";
    $db = "tafer";
    $con = mysql_conect($server, $user, $pass) or die ("Error al conectar a la base de datos".mysql_error());

    mysql_selectdb($db, $con);
    
    return $con;
}
?>