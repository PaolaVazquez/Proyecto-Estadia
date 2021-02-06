<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKTEAM | Edit User</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
    <header class="header-contact">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="index.html"><img src="img/MKT_Log in Logo-01.png" alt="MKT"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        BLOG
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="photos.html">PHOTOS</a>
                        <a class="dropdown-item" href="videos.html">VIDEOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Contact.html">CONTACT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faqs.html">FAQ'S</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PROFILE
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="vista-admin.php">MY PROFILE</a>
                        <a class="dropdown-item" href="edit-wp.html">EDIT WEB PAGE </a>
                        <a class="dropdown-item" href="agregar.php">ADD USER</a>
                        <a class="dropdown-item" href="edit-user.php">EDIT USER</a>
                        <a class="dropdown-item" href="consultar.php">USERS</a>
                        <a class="dropdown-item" href="consultar-lead.php"> LEADS</a>
                        <a class="dropdown-item" href="cerrar_sesion.php">SIGN OUT</a>

                </li>
              </ul>
            </div>
          </nav>
  <form action="edit-datos.php" method="POST">
            <div class="perfil">
                <h1>EDIT USER</h1>
                <div class="datos">
                <label>Type of User: </label>
                    <select name="usuarios" id="usuarios" >
                        <option value="" selected="selected">Seleccionar Usuario</option>
                        <?php
                        include("conection.php");
                        $usuario = "root";
                        $password = "";
                        $servidor = "localhost";
                        $BD = "tafer";
                        $con = mysqli_connect($servidor, $usuario, $password, $BD);
                        $sql = "SELECT Fname, Lname, Position, Phone, Email, Access FROM users LIMIT 10";
                        $result = mysqli_query($con, $sql);
                        while($rows = mysqli_fetch_assoc($result)){
                          ?>
                          <option value="<?php echo $rows["id"];?>"><?php echo $rows["Fname"];?></option>
                        <?php }
                        mysqli_close($con);
                        ?>
                    </select>
                </div>
                <div class="datos">
                    <label>First Name:  </label>
                    <input type="text"  name="Fname" id="Fname">
                </div>

                <div class="datos">
                    <label>Last Name:</label>
                    <input type="text" name="Lname" id="Lname">
                </div>
                <div class="datos">
                    <label for="">Position:</label>
                    <input type="text" name="position" id="position">
                </div>
                <div class="datos">
                    <label for="">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="datos">
                    <label>Phone:</label>
                    <input type="text" name="phone" id="phone">
                </div>
                <div class="datos">
                    <label>Type of User: </label>
                    <select name="Users" id="Users" >
                        <option value="select">Select</option>
                        <option value="Editor">Editor</option>
                        <option value="Admin">Administrator</option>
                    </select>

                </div>
                <input class="btn-add" type="button" value="SAVE">
                <input class="btn-add" type="button" value="CANCEL">

            </div>
          </form>
    </header>

    <footer>
        <div class="container-fluid">
          <div class="row rowspacing text-center">

            <div class="direction col-sm-4">
                <h1>FELIZMENTE AGRADECIDOS</h1>
            </div>
            <div class="centro col-sm-4">
              <h2>#NO CULPO</h2>
              <h2>#NO CRITICO</h2>
              <h2>#NO JUZGO</h2>
            </div>
            <div class="redes col-sm-4">
                <a href=""> <img src="img/MKT_Iconos FB IG-01.png" alt="MKT"> </a>
                <a href=""> <img src="img/MKT_Iconos FB IG-02.png" alt="MKT"> </a>
                <a href=""> <img src="img/MKT_Log in Logo-01.png" alt="MKT"> </a>
            </div>
          </div>

        </div>
      </footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script type="text/javascript" src="js/getData.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>

</html>
