<?php

require("../Acciones/conexion.php");

session_start();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Home</title>

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="Home.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <script src="../push.js/push.min.js"></script>

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
                <li class="active">
                    <a href="..\Home\Home.php">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a>
                </li>
                <li>
                    <a name="Perfil" href="../Acciones/perfiles.php">
                        <i class="fas fa-id-card"> </i>
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
                        <span>Menu</span>
                    </button>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 col-sm-9">
                        <form method="POST" action="..\Acciones\crearpost.php" class="signup-form">


                            <div class="container ">
                                <div class="row">
                                    <div class="col-5 inicial">
                                        <p> <input id="a" name="opcion" type="radio" class="css-checkbox" value="Busco Trabajo"><label class="css-label" for="a">Busco trabajo</label> </p>
                                    </div>

                                    <div class="col-5">
                                        <p> <input id="b" name="opcion" type="radio" class="css-checkbox" value="Busco un profesional"><label class="css-label" for="b">Busco un profesional</label> </p>
                                    </div>
                                </div>
                            </div>


                            <div class="form-textbox">
                                <label for="text">Titulo <i class="fas fa-user"></i> </label>
                                <input type="text" name="titulo" id="titulo" maxlength="40" />
                            </div>

                            <div class="form-textbox">
                                <label id="labdesc" for="text">Descripción <i class="fas fa-user"></i> </label>
                                <textarea name="descripcion" id="descripcion" rows="8" maxlength="400"> </textarea>
                            </div>

                            <br>
                            <div class="wrapp">
                                <button name="publicar" class="IS">Publicar Aviso</button>
                            </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-4 col-sm-6">

                    <!-- <script>
                        Push.create("Tienes un nuevo mensaje",{
                            body: "Fackzilla te ha enviado un mensaje"
                        });

                    </script> -->

                </div>
            </div>
            <br>
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
        <script src="Home.js"></script>

</body>

</html>