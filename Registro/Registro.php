<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="Registro.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <br><br>
    <div class="container2" id="wrapp">

        <div class="sign-up-content">

            <form method="POST" action="..\Acciones\registrarusuario.php" class="signup-form">

                <h2>Que tipo de usuario queres crear?</h2>

                <div class="container ">
                    <div class="row">
                        <div class="col-3">
                            <p> <input id="a" name="tipo" type="radio" class="css-checkbox" value="Trabajador"><label class="css-label" for="a">Trabajador</label> </p>
                        </div>

                        <div class="col-3 offset-2 ">
                            <p> <input id="b" name="tipo" type="radio" class="css-checkbox" value="Cliente"><label class="css-label" for="b">Cliente</label> </p>
                        </div>
                    </div>
                </div>




                <div class="form-textbox">
                    <label for="text">Usuario <i class="fas fa-user"></i> </label>
                    <input type="text" name="username" id="username" />
                </div>

                <div class="form-textbox">
                    <label for="contraseña">Email<i class="fas fa-at"></i> </label>
                    <input type="email" name="email" id="email" />
                </div>

                <div class="form-textbox">
                    <label for="contraseña">Contraseña <i class="fas fa-lock"></i> </label>
                    <input type="password" name="contraseña" id="contraseña" />
                </div>

                <div class="terminosycond">
                    <p> <input type="checkbox" id="1" class="css-checkbox"> <label class="css-label" for="1"> Acepto los <a href="" class="Loginhere-link"> Términos y Condiciones</a></label></p>
                </div>

                <div class="wrapper">
                    <button class="IS">Crear Cuenta</button>
                </div>
            </form>

            <p class="Loginhere">
                Ya estas registrado? <a href="..\Login\Login.php" class="Loginhere-link"> Inicia sesión</a>
            </p>
        </div>
    </div>
    <script src="Registro.js"></script>
</body>

</html>