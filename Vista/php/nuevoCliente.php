<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Nuevo Cliente</title>
</head>

<body>
    <h1 class="display-5 text-center">Registro de Nuevo Cliente</h1>
    <br>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-4 text-center">
                <form action="../../Controlador/agregaCliente.php" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="nombre">
                        <label>Nombre del Cliente</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="text" class="form-control" name="telefono">
                        <label>Teléfono de Contacto</label>
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="correo">
                        <label>Correo electrónico</label>
                    </div>
                    <br>
                    <input type="submit" value="Registrar" class="btn btn-primary">
                    <a href="verClientes.php" class="btn btn-danger">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>