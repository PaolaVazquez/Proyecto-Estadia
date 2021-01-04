<?php
include conection.php
$user = "root";
$pass = "";
$server = "localhost";
$db = "instanceexperience";

$conection = mysqli_connect ($servidor, $usuario, $password, $BD);

$salida = "";
$query = "SELECT * FROM formulario ORDER By firstN";

if (isset($_POST['consulta'])) {
  $q = $mysqli->real_escape_string($_POST['consulta']);
  $query = "SELECT firstN, lastN, phone, email FROM formulario WHERE firstN LIKE '%".$q."%' OR lastN LIKE '%".$q."%' OR phone LIKE '%".$q."%' OR email LIKE '%".$q."%'";
}

$resultado = $mysqli->query($query);

if ($resultado->num_rows > 0) {
  $salida.="<table class='tabla_datos'>
  <thead>
    <tr>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Phone</td>
      <td>Email</td>
    </tr>
  </thead>
  <tbody>";


  while ($fila = $resultado->fetch_assoc()) {
    $salida.= "<tr>
                <td>".$fila['firstN']."</td>
                <td>".$fila['lastN']."</td>
                <td>".$fila['phone']."</td>
                <td>".$fila['email']."</td>
                </tr>";
  }
  $salida.="</tbody></table>";
} else {
  $salida.="No hay datos";
}
echo $salida;
$mysqli->close();

 ?>
