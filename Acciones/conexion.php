<?php

    $hostname = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $db = "WKNT";

    $conexion = mysqli_connect($hostname, $dbusername, $dbpassword, $db);

    if (!$conexion) {
      die("Database connection failed: ");
    }
?>