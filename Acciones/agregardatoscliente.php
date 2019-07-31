<?php
    require("conexion.php");

    session_start();

    $nombre = $_REQUEST["nombre"];
    $contraseña = $_REQUEST["contraseña"];
    $telefono = $_REQUEST["telefono"];
    $ClienteId = $_SESSION["user-id"];
    
    $hash = password_hash($contraseña, PASSWORD_BCRYPT);

    //BARRIOS//

    if(is_array($_POST['barrio']))
    {
        // realizamos el ciclo
        while(list($key,$value) = each($_POST['barrio'])) 
        {
            ///imprimimos el valor del actual checkbox
            echo $value.'<br>';

            $query1 = "INSERT INTO Barrios (Barrio, ClienteId) VALUES ('$value','" . $ClienteId. "' )";

            $resultado1 = mysqli_query($conexion, $query1);
        }
    }
    
    
    if($_POST["nombre"]){

        $cambiarnomb = "UPDATE Clientes SET Nombrecliente = '" . $nombre . "'  WHERE ClienteId = $ClienteId";

        $querynom = mysqli_query($conexion, $cambiarnomb);
    
    }

    if($_POST["telefono"]){

        $cambiartel = "UPDATE Clientes SET Telefono = '" . $telefono . "'  WHERE ClienteId = $ClienteId";

        $querytel = mysqli_query($conexion, $cambiartel);
    
    }

    if($_POST["contraseña"]){

        $cambiarcont = "UPDATE Clientes SET Password = '" . $hash . "' WHERE ClienteId = $ClienteId";

        $querycnt = mysqli_query($conexion,$cambiarcont);

    }


    if ($resultado1) {
   
       header('Location: ..\Home\Home.php'); 

    }else{
 
        var_dump(mysqli_error($conexion));
    }
