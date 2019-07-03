<?php
    require("conexion.php");

    session_start();

    $email = $_REQUEST["email"];
    $password = $_REQUEST["contraseña"];
    $tipo = $_REQUEST["tipo"];

    if($tipo == "trabajador") {

        $query = 'SELECT * FROM trabajadores WHERE email LIKE "' . $email . '" LIMIT 1';

    } else {
    
        $query = 'SELECT * FROM clientes WHERE email LIKE "' . $email . '" LIMIT 1';
    }
    
    $resultado = mysqli_query($conexion, $query);

    $usuario = mysqli_fetch_array($resultado);

    
    if (password_verify($password, $usuario['Password'])) {
        
        $_SESSION["username"] = $email;
        $_SESSION["user-id"] = $usuario["UsuarioId"];
        $_SESSION["tipo"] = $tipo;
        
        header('Location: ..\home\home.php');

    } else {
     
        $_SESSION["message"] = "Usuario o contraseña incorrectos";
        header('Location: ..\login\login.php'); 
    }
?>