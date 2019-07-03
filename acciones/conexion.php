<?php

    $hostname = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $db = "appComit";

    $conexion = mysqli_connect($hostname, $dbusername, $dbpassword, $db);

    if (!$conexion) {
      die("Database connection failed: ");
    }
?>