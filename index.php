<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="icon" href="Vista/img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Inicio de Sesión</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col">
                <h1 class="display-5 text-center">Zapatería Alondra</h1>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-4 text-center">
                <form method="post">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="correo">
                        <label for="floatingInput">Correo electrónico</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="psw">
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Iniciar Sesión">
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-4 text-center">
                <?php
                if (empty($_POST)) {
                ?>
                    <?php } else {
                    include("./Persistencia/UsuarioDAO.php");

                    $usuarioDao = new UsuarioDAO();
                    $correo = $_POST['correo'];
                    $pass = $_POST['psw'];
                    $login = $usuarioDao->Login($correo, $pass);
                    if ($login) {
                        session_start();
                        $_SESSION['usuario'] = $login[1];
                        $_SESSION['puesto'] = $login[4];
                        $_SESSION['IdUsuario'] = $login[0];
                        header("Location: ./Vista/php/bienvenido.php");
                    } else {
                    ?>
                        <br>
                        <div class="alert alert-danger d-flex align-items-center">
                            <div>
                                Correo y/o Contraseña Incorrectos
                            </div>
                        </div>
                    <?php  } ?>
                <?php  } ?>
            </div>
        </div>
    </div>
</body>

</html>