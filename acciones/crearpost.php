<?php
    require("conexion.php");

    session_start();

    $titulo = $_REQUEST["titulo"];
    $descripcion = $_REQUEST["descripcion"];
    $opcion = $_REQUEST["opcion"];
    
    
    $query = "INSERT INTO publicaciones(titulo, descripcion, opcion) 
    VALUES('" . $titulo . "', '" . $descripcion . "', '" . $opcion . "')";


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