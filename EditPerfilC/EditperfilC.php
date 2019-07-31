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
    <link rel="stylesheet" href="EditPerfilC.css">
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
                    <a href="../Acciones/logout.php">
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
                    <a href="..\Mensajeria\Mensajeria.php">
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

            <h3 class="titulos">Datos personales</h3>

            <br>

            <form method="POST" action="../Acciones/agregardatoscliente.php" class="signup-form">

                <?php

                $usuarioid = $_SESSION['user-id'];

                $mostrardatos = 'SELECT * FROM Clientes WHERE ClienteId LIKE "' . $usuarioid . '" ';

                $resultado = mysqli_query($conexion, $mostrardatos);

                $info = mysqli_fetch_array($resultado);

                ?>
                <div class="form-textbox">
                    <label for="text">Usuario <i class="fas fa-user"></i> </label>
                    <input type="text" name="username" id="username" disabled placeholder="<?php echo $info["UsuarioC"] ?>" />
                </div>

                <div class="form-textbox">
                    <label for="contraseña">Contraseña <i class="fas fa-lock"></i> </label>
                    <input type="password" name="contraseña" id="contraseña" placeholder="Cambiar contraseña" />
                </div>

                <div class="form-textbox">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" />
                </div>

                <div class="form-textbox">
                    <label for="telefono">Teléfono <i class="fas fa-phone"></i> </label>
                    <input type="tel" name="telefono" id="telefono" />
                </div>

                <div class="line"></div>

                <h3 class="titulos">Seleccione barrio de residencia</h3>

                <br>

                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-5">
                            <p> <input id="1" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Agronomía"><label class="css-label" for="1">Agronomía<label></p>
                            <p> <input id="2" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Almagro"><label class="css-label" for="2">Almagro</label> </p>
                            <p> <input id="3" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Balvanera"><label class="css-label" for="3">Balvanera</label> </p>
                            <p> <input id="4" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Barracas"><label class="css-label" for="4">Barracas</label> </p>
                            <p> <input id="5" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Belgrano"><label class="css-label" for="5">Belgrano</label> </p>
                            <p> <input id="6" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Boedo"><label class="css-label" for="6">Boedo</label> </p>
                            <p> <input id="7" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Caballito"><label class="css-label" for="7">Caballito</label> </p>
                            <p> <input id="8" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Chacarita"><label class="css-label" for="8">Chacarita</label> </p>
                            <p> <input id="9" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Coghlan"><label class="css-label" for="9">Coghlan</label> </p>
                            <p> <input id="10" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Colegiales"><label class="css-label" for="10">Colegiales</label> </p>
                            <p> <input id="11" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Constitución"><label class="css-label" for="11">Constitución</label> </p>
                            <p> <input id="12" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Flores"><label class="css-label" for="12">Flores</label> </p>
                        </div>

                        <div class="col-md-3 col-sm-5">
                            <p> <input id="13" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Floresta"><label class="css-label" for="13">Floresta</label> </p>
                            <p> <input id="14" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="La Boca"><label class="css-label" for="14">La Boca</label> </p>
                            <p> <input id="15" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Liniers"><label class="css-label" for="15">Liniers</label> </p>
                            <p> <input id="16" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Mataderos"><label class="css-label" for="16">Mataderos</label> </p>
                            <p> <input id="17" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Monte Castro"><label class="css-label" for="17">Monte Castro</label> </p>
                            <p> <input id="18" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Montserrat"><label class="css-label" for="18">Montserrat</label> </p>
                            <p> <input id="19" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Pompeya"><label class="css-label" for="19">Pompeya</label> </p>
                            <p> <input id="20" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Nuñez"><label class="css-label" for="20">Nuñez</label> </p>
                            <p> <input id="21" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Palermo"><label class="css-label" for="21">Palermo</label> </p>
                            <p> <input id="22" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Parque Avellaneda"><label class="css-label" for="22">Parque Avellaneda</label> </p>
                            <p> <input id="23" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Parque Chacabuco"><label class="css-label" for="23">Parque Chacabuco</label> </p>
                            <p> <input id="24" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Parque Chas"><label class="css-label" for="24">Parque Chas</label> </p>
                        </div>

                        <div class="col-md-3 col-sm-5">
                            <p> <input id="25" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Parque Patricios"><label class="css-label" for="25">Parque Patricios</label> </p>
                            <p> <input id="26" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Paternal"><label class="css-label" for="26">Paternal</label> </p>
                            <p> <input id="27" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Puerto Madero"><label class="css-label" for="27">Puerto Madero</label> </p>
                            <p> <input id="28" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Pompeya"><label class="css-label" for="28">Pompeya</label> </p>
                            <p> <input id="29" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Recoleta"><label class="css-label" for="29">Recoleta</label> </p>
                            <p> <input id="30" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Retiro"><label class="css-label" for="30">Retiro</label> </p>
                            <p> <input id="31" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="San Cristobal"><label class="css-label" for="31">San Cristobal</label> </p>
                            <p> <input id="32" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="San Nicolás"><label class="css-label" for="32">San Nicolás</label> </p>
                            <p> <input id="33" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="San Telmo"><label class="css-label" for="33">San Telmo</label> </p>
                            <p> <input id="34" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Velez Sárfield"><label class="css-label" for="34">Velez Sárfield</label> </p>
                            <p> <input id="35" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Versalles"><label class="css-label" for="35">Versalles</label> </p>
                            <p> <input id="36" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa Crespo"><label class="css-label" for="36">Villa Crespo</label> </p>
                        </div>

                        <div class="col-md-3 col-sm-5">
                            <p> <input id="37" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa del Parque"><label class="css-label" for="37">Villa del Parque </label> </p>
                            <p> <input id="38" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa Devoto"><label class="css-label" for="38">Villa Devoto </label> </p>
                            <p> <input id="39" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa General Mitre"><label class="css-label" for="39">Villa General Mitre </label> </p>
                            <p> <input id="40" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa Lugano"><label class="css-label" for="40">Villa Lugano </label> </p>
                            <p> <input id="41" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa Luro"><label class="css-label" for="41">Villa Luro </label> </p>
                            <p> <input id="42" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa Ortúzar"><label class="css-label" for="42">Villa Ortúzar </label> </p>
                            <p> <input id="43" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa Pueyrredon"><label class="css-label" for="43">Villa Pueyrredon</label> </p>
                            <p> <input id="44" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa Real"><label class="css-label" for="44">Villa Real</label></p>
                            <p> <input id="45" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa Riachuelo"><label class="css-label" for="45">Villa Riachuelo</label> </p>
                            <p> <input id="46" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa Santa Rita"><label class="css-label" for="46">Villa Santa Rita</label> </p>
                            <p> <input id="47" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa Soldati"><label class="css-label" for="47">Villa Soldati</label> </p>
                            <p> <input id="48" name="barrio[]" id="barrio" type="checkbox" class="css-checkbox" value="Villa Urquiza"><label class="css-label" for="48">Villa Urquiza</label> </p>
                        </div>

                        <div class="wrapp">
                            <input type="submit" name="submit" value="Guardar Cambios" class="IS">
                        </div>

                        <div class="line"></div>

                    </div>
                </div>

            </form>

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
        <script src="EditPerfilC.js"></script>
</body>

</html>