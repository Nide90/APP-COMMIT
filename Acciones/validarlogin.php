<?php
    require("conexion.php");

    session_start();

    $usuario = $_REQUEST["username"];
    $password = $_REQUEST["contraseña"];
    $tipo = $_REQUEST["tipo"];

    if($tipo == "Trabajador") {

        $query = 'SELECT * FROM Trabajadores WHERE UsuarioT LIKE "' . $usuario . '" LIMIT 1';

    } else {
    
        $query = 'SELECT * FROM Clientes WHERE UsuarioC LIKE "' . $usuario . '" LIMIT 1';
    }
    
    $resultado = mysqli_query($conexion, $query);

    $usuario = mysqli_fetch_array($resultado);

    
    if (password_verify($password, $usuario['Password'])) {
        
        $_SESSION["username"] = $_REQUEST["username"];

        if($tipo == "Trabajador") {

            $_SESSION["user-id"] = $usuario["TrabajadorId"];

        }else if ($tipo == "Cliente"){

            $_SESSION["user-id"] = $usuario["ClienteId"]; 
        }
        
        $_SESSION["tipo"] = $tipo;
        
        header('Location: ../Home/Home.php');
    } else {
     
        $_SESSION["message"] = "Usuario o contraseña incorrectos";
        header('Location: ../Login/Login.php'); 
    }
