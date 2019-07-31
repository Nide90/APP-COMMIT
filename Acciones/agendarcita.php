<?php
    require("conexion.php");

    session_start();

    $fecha = $_REQUEST["fecha"];
    $hora = $_REQUEST["hora"];
    $ubicacion = $_REQUEST["ubicacion"];
    $motivo = $_REQUEST["motivo"];
    $listadotrabajadores = $_REQUEST["listadotrabajadores"];
    $listadoclientes = $_REQUEST["listadoclientes"];
       
    if(isset($_POST['submit'])){
    

            $Cita="INSERT INTO Citas(FechaCita, HoraCita, MotivoCita, LugarCita, Trabajador, Cliente) VALUES ('" . $fecha . "','" . $hora . "','" . $motivo . "','" . $ubicacion . "','" . $listadotrabajadores . "','" . $listadoclientes . "')";

    }else{}

    
    $query = mysqli_query($conexion,$Cita);

    if ($query) {
   
       header('Location: ..\Home\Home.php'); 

    }else{
 
        var_dump(mysqli_error($conexion));
    }
