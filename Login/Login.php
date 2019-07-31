<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="Login.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <br><br>
    <div class="container2" id="wrapp">

        <div class="sign-up-content">

            <form method="POST" action="..\Acciones\validarlogin.php" class="signup-form">

                <h2 class="form-title">Inicie Sesión</h2>

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
                    <label for="contraseña">Contraseña <i class="fas fa-lock"></i> </label>
                    <input type="password" name="contraseña" id="contraseña" />
                </div>

                <div class="wrapper">
                    <button class="IS">Iniciar Sesión</button>
                </div>

                <p class="Loginhere">
                    No tenés una cuenta? <a href="..\Registro\Registro.php" class="Loginhere-link"> Crear cuenta</a>
                </p>

            </form>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="Login.js"></script>

</body>

</html>