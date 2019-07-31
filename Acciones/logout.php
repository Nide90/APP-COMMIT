<?php
    // Destruyo la sesion para que se borren todos los datos guardados en ella
    session_destroy();

    // Redirijo a la pagina de Login
    header('Location: ../Login/Login.php');
?>