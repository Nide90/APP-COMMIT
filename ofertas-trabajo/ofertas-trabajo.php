<?php 
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>OFERTAS DE TRABAJO</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="ofertas-trabajo.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>ConecTrabajo</h3>
                <strong>CT</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="..\home\home.php">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a>
                </li>
                <li>
                    <a href="..\perfil\perfil.php">
                        <i class="fas fa-id-card"></i>
                        Perfil
                    </a>
                    <a href="..\mensajeria\mensajeria.php">
                        <i class="fas fa-paper-plane"></i>
                        Mensajes
                    </a>

                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-briefcase"></i>
                        Ofertas de trabajo
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Por fecha</a>
                        </li>
                        <li>
                            <a href="#">Por rubro</a>
                        </li>
                        <li>
                            <a href="#">Por zona</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#">
                        <i class="fas fa-image"></i>
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
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

            <?php if ($_REQUEST["filtro"] == "rubro") { ?>
                <h1>RUBRO</h1>
            <?php } ?>
            
            <?php if ($_REQUEST["filtro"] == "zona") { ?>
                
            <?php } ?>

            <?php if ($_REQUEST["filtro"] == "fecha") { ?>
                <h1>RUBRO</h1>
            <?php } ?>

            <h3>Ofertas de trabajo</h3>
            <br>


            <div class="card-columns">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Oferta 1</h4>
                        <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Contactar</a>
                    </div>
                    <div class="card-footer">
                    2 days ago
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Oferta 2</h4>
                        <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Contactar</a>
                    </div>    
                    <div class="card-footer">
                    2 days ago
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Oferta 3</h4>
                        <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Contactar</a>
                    </div>
                    <div class="card-footer">
                    2 days ago
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Oferta 4</h4>
                        <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Contactar</a>
                    </div>    
                    <div class="card-footer">
                    2 days ago
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Oferta 5</h4>
                        <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Contactar</a>
                    </div>    
                    <div class="card-footer">
                    2 days ago
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Oferta 6</h4>
                        <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Contactar</a>
                    </div>    
                    <div class="card-footer">
                    2 days ago
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Oferta 7</h4>
                        <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Contactar</a>
                    </div>    
                    <div class="card-footer">
                    2 days ago
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Oferta 8</h4>
                        <p class="card-text">
                        Some quick example text to build on the card title
                        and make up the bulk of the card's content.
                        </p>
                        <a href="#!" class="btn btn-primary">Contactar</a>
                    </div>    
                    <div class="card-footer">
                    2 days ago
                    </div>
                </div>

            </div>

            <div class="line"></div>

            

            <div class="line"></div>
        
        </div>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
        </script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
        </script>
        <script src="ofertas-trabajo.js"></script>
</body>

</html>