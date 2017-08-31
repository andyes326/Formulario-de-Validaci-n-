<?php
//Variables de Formulario
$name = $_POST['name'];
$lname = $_POST['lname'];
$user = $_POST['usuario'];
$cedu = $_POST['cedu'];
$pass = $_POST['pass'];
$mail = $_POST['mail'];
//Conexion con DB
$servDB = "localhost";
$userDB = "root";
$passDB = "";
$nameDB = "practisisdb";
$link = mysqli_connect($servDB, $userDB, $passDB, $nameDB);
// Verificar Conexion
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Insertar datos en DB
$sql = "INSERT INTO datos (usuario, nombre, apellido, cedula, contrasena, mail)
        VALUES ('$user', '$name', '$lname', '$cedu', '$pass', '$mail')";
if(mysqli_query($link, $sql)){
    //
} else{
    echo "ERROR: No se puede Crear usuario $sql. " . mysqli_error($link);
}

//Cerrar Conexion
mysqli_close($link)
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Datos recibidos</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <div>
      <!--Formulario 2-->
      <form class="formulario2">
        <h1 class="form__title">Usuario Registrado</h1>
        <fieldset>
          <legend> DATOS</legend>
          <div>
            <?php
                // Archivo para publicacion de datos
                include("db_conex.php");
                $con = new conexion();
                $con -> recuperarDatos();
             ?>
          </div>
        </fieldset>
      </form>

    </div>
  </body>
</html>
