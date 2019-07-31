<?php
session_start();

require("../Acciones/conexion.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Editar Perfil</title>

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="PerfilC.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>



</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>WorKonect</h3>
                <strong>WK</strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="..\Acciones\logout.php">
                        <i class="menu fas fa-window-close"></i>
                        Cerrar Sesión
                    </a>
                </li>
                <li>
                    <a href="..\Home\Home.php">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a>
                </li>
                <li class="active">
                    <a href="../Acciones/perfiles.php">
                        <i class="fas fa-id-card"></i>
                        Perfil
                    </a>
                </li>
                <li>
                    <a href="../Mensajeria/Mensajeria.php">
                        <i class="fas fa-paper-plane"></i>
                        Mensajes
                    </a>
                </li>
                <li>
                    <a href="..\OfertasDeTrabajo\OfertasDeTrabajo.php" aria-expanded="false">
                        <i class="fas fa-briefcase"></i>
                        Ofertas de trabajo
                    </a>
                </li>
                <li>
                    <a href="../FAQ/FAQ.php">
                        <i class="fas fa-question"></i>
                        FAQ
                    </a>
                </li>

            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar ">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        Menu </span>
                    </button>
                </div>
            </nav>

            <h3 class="titulos">Datos personales</h3>

            <br>

                <?php

                $usuarioid = $_SESSION['user-id'];

                $mostrardatos = 'SELECT * FROM Clientes WHERE ClienteId LIKE "' . $usuarioid . '" ';

                $resultado = mysqli_query($conexion, $mostrardatos);

                $info = mysqli_fetch_array($resultado);

                

                echo "Usuario: " . $info["UsuarioC"]; ?>

                 <br> <br>


                <?php echo "Nombre: " . $info["NombreCliente"]; ?>
               
                <br> <br>

                <?php echo "Telefono: " . $info["Telefono"]; ?>


                <div class="line"></div>

                <h3 class="titulos">Barrio de residencia</h3>

                <br>

                <?php

                $query2 = "SELECT DISTINCT * FROM Barrios WHERE ClienteId = '" . $_SESSION["user-id"] . "' ";

                $resultado2 = mysqli_query($conexion, $query2);

                while ($bar = mysqli_fetch_assoc($resultado2)) {

                    echo ($bar["Barrio"] . " - ");
                };

                ?>


                <div class="wrapp">
                    <input type="submit" name="submit" value="Modificar datos" class="IS">
                </div>


            </form>
        </div>
        <div class="line"></div>
    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    <script src="PerfilT.js"></script>


</body>

</html>