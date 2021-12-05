<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Modificar Cliente</title>
</head>
<body>
    <h1 class="display-5 text-center">Modificar Cliente</h1>
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-8 text-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID del Cliente</th>
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
                                <td> <?php echo $tabla[0]; ?> </td>
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
    <h4 class="text-center">Elige el ID del cliente a eliminar</h4>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-8 align-self-center">
                <form action="../../Controlador/modificarCliente.php" method="POST">
                    <select class="form-select" name="id">
                        <?php
                        $ids = $clienteDao->verIDs();
                        while ($id = mysqli_fetch_array($ids)) {
                        ?>
                            <option> <?php echo $id[0]; ?> </option>
                        <?php } ?>
                    </select>
            </div>
            <br><br>
            <h5 class="text-center">Datos a modificar</h5>
            <div class="col-8">
                <div class="form-floating">
                    <input type="text" class="form-control" name="nombre">
                    <label>Nombre del Usuario</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="text" name="telefono" class="form-control">
                    <label>Número Telefónico</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="email" name="correo" class="form-control">
                    <label>Correo electrónico</label>
                </div>
                <br>
                <input type="submit" value="Modificar Usuario" class="btn btn-secondary">
                <a href="verClientes.php" class="btn btn-danger">Cancelar</a>
            </div>
            </form>
        </div>
    </div>
</body>
</html>