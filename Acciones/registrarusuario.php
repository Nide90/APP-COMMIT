<?php
    require("conexion.php");

    session_start();

    $usuario = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["contraseña"];
    $tipo = $_REQUEST["tipo"];


    $hash = password_hash($password, PASSWORD_BCRYPT);
    
    if ($tipo == "Trabajador") {
    
    $query = "INSERT INTO Trabajadores(UsuarioT, Email, password) 
    VALUES('" . $usuario . "', '" . $email . "', '" . $hash . "')";

    } else {

    $query = "INSERT INTO Clientes(UsuarioC, Email, password) 
    VALUES('" . $usuario . "', '" . $email . "', '" . $hash . "')";

    }

    $resultado = mysqli_query($conexion, $query);

    if ($resultado) {
   
        $_SESSION["username"] = $username;
        $_SESSION["user-id"] = mysqli_insert_id($conexion);
        
        if ($tipo == "Trabajador") {
    
            header('Location:..\EditPerfilT\EditPerfilT.php');
        
            } else {
        
            header('Location:..\EditPerfilC\EditPerfilC.php');
        
            }
        unset($_SESSION["comunidad-id"]);
        unset($_SESSION["comunidad-nombre"]);
        
    } else {
        header('Location: ..\Registro\Registro.php');        
    }

?>