<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Clientes</title>
</head>

<body>
    <h1 class="display-5 text-center">Clientes Registrados</h1>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-8 text-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Correo Electrónico</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../../Persistencia/ClienteDAO.php");
                        $clienteDao = new ClienteDAO();
                        $registro = $clienteDao->consultarClientes();
                        while ($tabla = mysqli_fetch_array($registro)) {
                        ?>
                            <tr>
                                <td> <?php echo $tabla[1]; ?> </td>
                                <td> <?php echo $tabla[2]; ?> </td>
                                <td> <?php echo $tabla[3]; ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-3 text-center">
                <a class="btn btn-primary" href="bienvenido.php" role="button">Regresar al Inicio</a>
            </div>
            <div class="col-3 text-center">
                <a class="btn btn-success" href="nuevoCliente.php" role="button">Ingresar Nuevo Cliente</a>
            </div>
            <div class="col-3 text-center">
                <a href="modificarCliente.php" class="btn btn-info text-white">Modificar Cliente Existente</a>
            </div>
            <div class="col-3 text-center">
                <a href="eliminarCliente.php" class="btn btn-danger">Eliminar Cliente</a>
            </div>
        </div>
    </div>
</body>

</html>