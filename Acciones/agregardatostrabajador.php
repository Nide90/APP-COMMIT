<?php
require("conexion.php");

session_start();

$contraseña = $_REQUEST["contraseña"];
$nombre = $_REQUEST["nombre"];
$telefono = $_REQUEST["telefono"];
$TrabajadorId = $_SESSION["user-id"];

$traer = "SELECT * FROM Trabajadores";
$procesar = mysqli_query($conexion, $traer);
$mostrar = mysqli_fetch_array($procesar);


$hash = password_hash($password, PASSWORD_BCRYPT);

if ($_POST["nombre"]) {

  $cambiarnomb = "UPDATE Trabajadores SET NombreTrabajador = '" . $nombre . "'  WHERE TrabajadorId = $TrabajadorId";

  $querynom = mysqli_query($conexion, $cambiarnomb);
}

if ($_POST["telefono"]) {

  $cambiartel = "UPDATE Trabajadores SET Telefono = '" . $telefono . "'  WHERE TrabajadorId = $TrabajadorId";

  $querytel = mysqli_query($conexion, $cambiartel);
}

if ($_POST["contraseña"]) {

  $cambiarcont = "UPDATE Trabajadores SET Password = '" . $hash . "' WHERE TrabajadorId = $TrabajadorId";

  $querycnt = mysqli_query($conexion, $cambiarcont);
}


//DIAS//

if (is_array($_POST['dia'])) {
  // realizamos el ciclo
  while (list($key, $value) = each($_POST['dia'])) {
    ///imprimimos el valor del actual checkbox
    echo $value . '<br>';

    $query1 = "INSERT INTO Disponibilidad (Dia, TrabajadorId) VALUES ('$value','" . $TrabajadorId . "' )";

    $resultado1 = mysqli_query($conexion, $query1);
  }
}

//BARRIOS//

if (is_array($_POST['barrio'])) {
  // realizamos el ciclo
  while (list($key, $value) = each($_POST['barrio'])) {
    ///imprimimos el valor del actual checkbox
    echo $value . '<br>';

    $query2 = "INSERT INTO Barrios (Barrio, TrabajadorId) VALUES ('$value','" . $TrabajadorId . "' )";

    $resultado2 = mysqli_query($conexion, $query2);
  }
}

//PROFESION//

if (is_array($_POST['profesion'])) {
  // realizamos el ciclo
  while (list($key, $value) = each($_POST['profesion'])) {
    ///imprimimos el valor del actual checkbox
    echo $value . '<br>';

    $query3 = "INSERT INTO Profesiones (Profesion, TrabajadorId) VALUES ('$value','" . $TrabajadorId . "' )";

    $resultado3 = mysqli_query($conexion, $query3);
  }
}


if ($resultado1 && $resultado2 && $resultado3) {

  header('Location: ..\Home\Home.php');
} else {

  var_dump(mysqli_error($conexion));
}
