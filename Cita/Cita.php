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

    <title>Cita</title>

    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="Cita.css">
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
                <li>
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
                        <h3>Pactar una Cita</h3>
                        <br>
                           
                    <form method="POST" action="..\Acciones\agendarCita.php" class="signup-form">

                        <div class="form-textbox">
                            <label for="text">Fecha <i class="fas fa-calendar-check"></i> </label>
                            <input type="date" name="fecha" step="1" min="<?php echo date("Y-m-d");?>" max="2029-12-31" value="dd-mm-aaaa" id="fecha">
                        </div>

                        <div class="form-textbox">
                            <label for="text">Hora <i class="fas fa-clock"></i> </label>
                            <input type="time" name="hora" id="hora">
                        </div>

                        <div class="form-textbox">
                            <label for="ubicacion">Ubicacion <i class="fas fa-map-marker-alt"></i> </label>
                            <input type="text" name="ubicacion" id="ubicacion" placeholder="Indicar dirección del lugar de encuentro" />
                        </div>

                        <div class="form-textbox">
                            <label for="nombre">Motivo de la Cita</label>
                            <input type="textarea" name="motivo" id="motivo" />
                        </div>

                        <div class="form-textbox">
                            <label for="listadotrabajadores">Trabajador <i class="fas fa-user"></i></label>
                            <select name="listadotrabajadores" id="listadotrabajadores">
                                <option value=""></option>
                                <?php $usuarios = $conexion->query("SELECT * FROM Trabajadores");?>
                                <?php while($u = $usuarios->fetch_assoc()){ ?>
                                <option value="<?php $u['UsuarioT'];?>"><?php echo($u['UsuarioT']);?></option>
                                <?php } ?>
                            </select>
                        </div>

                        
                        <div class="form-textbox">
                            <label for="listadoclientes">Cliente <i class="fas fa-user"></i></label>
                            <select name="listadoclientes" id="listadoclientes">
                                <option value=""></option>
                                <?php $usuarios = $conexion->query("SELECT * FROM Clientes");?>
                                <?php while($u = $usuarios->fetch_assoc()){ ?>
                                <option value="<?php $u['UsuarioC'];?>"><?php echo($u['UsuarioC']);?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="wrapp">
                            <input type="submit" name="submit" value="Agendar Cita" class="IS">
                        </div>

                        </form>

                        <div class="line"></div>
                        
                
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
        <script src="Cita.js"></script>

</body>

</html>