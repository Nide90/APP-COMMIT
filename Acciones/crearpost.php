<?php 
    require("conexion.php");

    session_start();

    if(isset($_POST['publicar'])){

        $opcion = $_POST['opcion'];
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $remitente = $_SESSION["user-id"] ;
        $fecha = date('Y/m/d H:i:s');


        if($opcion == "Busco Trabajo"){
            
            
            $query = "INSERT INTO Publicaciones (Tipopublicacion, Titulo, Descripcion,RemitenteTrabajadorid, Fecha)
            VALUES ('" . $opcion . "','" . $titulo . "','" . $descripcion . "','" . $remitente . "','" . $fecha . "');";

        
        }else{
            
            $query = "INSERT INTO Publicaciones (Tipopublicacion, Titulo, Descripcion, RemitenteClienteid, Fecha)
            VALUES ('" . $opcion . "','" . $titulo . "','" . $descripcion . "','" . $remitente . "','" . $fecha . "');";
        
        }
            
            if ($resultado = mysqli_query($conexion, $query)) {
                
                header("location: ..\OfertasDeTrabajo\OfertasDeTrabajo.php");
            
            }else{
                
                var_dump(mysqli_error($conexion));
            }
    }
?>