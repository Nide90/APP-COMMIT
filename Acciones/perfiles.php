<?php
    session_start();

    require("conexion.php");

    $busqueda = "SELECT * FROM Trabajadores,Clientes";

    $resultado = mysqli_query($conexion, $busqueda);

    $coincidencia = mysqli_fetch_array($resultado);

    if($_SESSION["username"] == $coincidencia["UsuarioT"] && $_SESSION["user-id"] == $coincidencia["TrabajadorId"] ){

        header('Location: ../PerfilT/PerfilT.php'); 

    } else if($_SESSION["username"] == $coincidencia["UsuarioC"] && $_SESSION["user-id"] == $coincidencia["ClienteId"]){
        
        header('Location: ../PerfilC/PerfilC.php'); 

    }else{    
    
        header('Location: ../EditPerfilC/EditPerfilC.php'); 
    }
?>  