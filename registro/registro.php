<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="registro.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet">
</head>
<body>
    <br><br>
        <div class="container">
            <div class="sign-up-content">

            <?php 
                        if (isset($_SESSION["message"])) {?> 
                        <div class="alert alert-danger mt-3" role="alert">
                            <?php echo $_SESSION["message"] ?>
                        </div>
                        <?php
                        }
                    ?>
        
                <form method="POST" action="..\acciones\registrarusuario.php" class="signup-form">
                    <h2 class="form-title">Que tipo de usuario queres crear?</h2>
                    <div class="form-radio ">
                        <input type="radio" name="tipo" value="trabajador" id="trabajador" checked="checked" />
                        <label for="trabajador">TRABAJADOR</label>

                        <input type="radio" name="tipo" value="cliente" id="cliente" />
                        <label for="cliente">CLIENTE</label>
                    </div>

                    <div class="form-textbox">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" />
                    </div>

                    <div class="form-textbox">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" />
                    </div>

                    <div class="form-textbox">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" name="contraseña" id="contraseña" />
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="term-cond" id="term-cond" class="term-cond" />
                        <label for="term-cond" class="label-term-cond"><span><span></span></span>Acepto los <a href="#" class="term-service">Términos y Condiciones</a></label>
                    </div>

                    <div class="form-textbox">
                        <input type="submit" name="submit" id="submit" class="submit" value="Crear cuenta" />
                    </div>
                </form>

                <p class="loginhere">
                    Ya estas registrado? <a href="..\login\login.php" class="loginhere-link"> Inicia sesión</a>
                </p>
            </div>
        </div>
    <script src="registro.js"></script> 
</body>
</html>