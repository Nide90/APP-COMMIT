<?php
    require("conexion.php");

    session_start();

    $nombre = $_REQUEST["nombre"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["contraseña"];
    $tipo = $_REQUEST["tipo"];


    $hash = password_hash($password, PASSWORD_BCRYPT);
    
    if ($tipo == "trabajador") {
    
    $query = "INSERT INTO trabajadores(nombre, email, password) 
    VALUES('" . $nombre . "', '" . $email . "', '" . $hash . "')";

    } else {

    $query = "INSERT INTO clientes(nombre, email, password) 
    VALUES('" . $nombre . "', '" . $email . "', '" . $hash . "')";

    }

    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
   
        $_SESSION["username"] = $username;
        $_SESSION["user-id"] = mysqli_insert_id($conexion);
        
        if ($tipo == "trabajador") {
    
            header('Location:..\editar-perfil\editar-perfil.php');
        
            } else {
        
            header('Location:..\editar-perfil-cliente\editar-perfil-cliente.php');
        
            }
        unset($_SESSION["comunidad-id"]);
        unset($_SESSION["comunidad-nombre"]);
        
    } else {
        $_SESSION["message"] = "Usuario ya existente";
        header('Location: ..\registro\registro.php');        
    }

?>