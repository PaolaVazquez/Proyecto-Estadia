<?php


try {
  if (isset($_FILES["file"])) {
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";

    $suported_files = ["image/jpeg", "image/png", "image/gif"];
    $image = $_FILES["file"];

    if (in_array($image["type"], $suported_files)) {
      $tmp_name = $image["tmp_name"];
      $name = $image["name"];
      $path = "img/$name";
      move_uploaded_file($tmp_name, $path);
      echo "true";
 }
     else {
      throw new Exception("Sube una imagen valida", 1);

    }
  }
  else {
    throw new Exception("No se ha subido una imagen", 1);

  }
} catch (Exception $e) {
  echo $e->getMessage();
}


 ?>