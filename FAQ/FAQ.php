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

    <title>FAQ</title>

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="FAQ.css">
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
                <li>
                    <a name="Perfil" href="../Acciones/perfiles.php">
                        <i class="fas fa-id-card"> </i>
                        Perfil
                    </a>
                </li>
                <li class="active">
                    <a href="../Mensajeria/Mensajeria.php">
                        <i class="fas fa-paper-plane"></i>
                        Mensajes
                    </a>
                </li>
                <li>
                    <a href="..\OfertasDeTrabajo\OfertasDeTrabajo.php" aria-expanded="false" >
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
                        <h3>Preguntas Frecuentes</h3>
                        <br>
                        <p class="pregunta">¿Puedo tener un usuario que sea trabajador y cliente?</p>

                        <p class="respuesta">No. En caso de que seas trabajador y desees contratar a otro trabajador deberas crearte una cuenta con Perfil cliente.</p>

                        <p class="pregunta">Si me cree una cuenta con Perfil de cliente, ¿puedo luego cambiar a trabajador?</p>

                        <p class="respuesta">No. Una vez creada la cuenta con un Perfil no se puede cambiar. En caso que quieras tener cuenta con otro tipo de Perfil
                        podras dar de baja la cuenta que ya no desees utilizar y crear una cuenta nueva.</p>

                        <p class="pregunta">¿Como se que un trabajador es confiable?</p>
                        
                        <p class="respuesta">Cada usuario con Perfil trabajador cuenta con una reputación que se basa en la cantidad de trabajos realizados (por intermedio)
                        de esta plataforma) y además podrás ver los comentarios que otros clientes hicieron sobre el usuario.</p>

                        <p class="pregunta">Si coordino con el cliente/trabajador una visita o reunión y no asiste, ¿qué puedo hacer?</p>

                        <p class="respuesta">En primera instancia lo mejor sería contactarte con tu contraparte para consultar el motivo de la ausencia. Como segunda medida,
                        en caso que no recibieras respuesta podras como "cliente" hacer una reseña en el Perfil del trabajador y como "trabajador" puedes reportar vía mail
                        al usuario para que podamos verificar con el acerca de lo sucedido.</p>

                        <p class="pregunta">Si un Perfil tiene datos falsos, ¿qué puedo hacer?</p>
                        
                        <p class="respuesta">Si ves que un Perfil tiene datos falsos podes enviarnos un email con el nombre de usuario al que pertenece dicho Perfil 
                        indicandonos qué datos son los que no son reales y si tenes alguna evidencia para constatarlo.</p>

                        <p class="pregunta">¿Cómo se paga el trabajo?</p>

                        <p class="respuesta">Actualmente los pagos se pueden realizar al trabajador en efectivo o si posee otro medio de pago (MercadoPago,etc).</p>

                        <p class="pregunta">¿Puedo tener más de un usuario?</p>

                        <p class="respuesta">Si ves que un Perfil tiene datos falsos podes enviarnos un email con el nombre de usuario al que pertenece dicho Perfil 
                        indicandonos qué datos son los que no son reales y si tenes alguna evidencia para constatarlo.</p>

                        <p class="pregunta">¿Puedo tener más de un usuario?</p>

                        <p class="respuesta">Si ves que un Perfil tiene datos falsos podes enviarnos un email con el nombre de usuario al que pertenece dicho Perfil 
                        indicandonos qué datos son los que no son reales y si tenes alguna evidencia para constatarlo.</p>
                        
                        
                </div>
                <div class="col-md-4 col-sm-6">
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
        <script src="FAQ.js"></script>

</body>

</html>