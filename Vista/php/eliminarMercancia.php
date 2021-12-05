<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Eliminar Mercancía</title>
</head>

<body>
    <div class="container">
        <h1 class="display-5 text-center">Modificar Mercancía</h1>
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID de Calzado</th>
                            <th scope="col">Proveedor</th>
                            <th scope="col">Estilo</th>
                            <th scope="col">Color</th>
                            <th scope="col">Número</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../../Persistencia/InventarioDAO.php");
                        include("../../Persistencia/ProveedorDAO.php");
                        $inventarioDao = new InventarioDAO();
                        $proveedorDao = new ProveedorDAO();

                        $tabla = $inventarioDao->consultarInventario();

                        while ($fila = mysqli_fetch_array($tabla)) {
                        ?>
                            <tr>
                                <td> <?php echo $fila[0]; ?> </td>
                                <td> <?php
                                        $nombre = $proveedorDao->nombrePorId($fila[1]);
                                        $registroNombre = mysqli_fetch_array($nombre);
                                        echo $registroNombre[0];
                                        ?> </td>
                                <td> <?php echo $fila[2]; ?> </td>
                                <td> <?php echo $fila[3]; ?> </td>
                                <td> <?php echo $fila[4]; ?> </td>
                                <td> <?php echo $fila[5]; ?> </td>
                                <td> <?php echo $fila[6]; ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <h5 class="text-center">Ingrese el ID del Calzado a eliminar</h5>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="../../Controlador/eliminarInventario.php" method="POST">
                    <div class="form-floating">
                        <select class="form-select" name="id">
                            <?php
                            $idsInventario = $inventarioDao->verIDsInventario();
                            while ($ids = mysqli_fetch_array($idsInventario)) {
                            ?>
                                <option> <?php echo $ids[0]; ?> </option>
                            <?php } ?>
                        </select>
                        <label>ID del Calzado</label>
                        <br>
                    </div>
                    <div class="row g-2">
                        <div class="col-md text-center">
                            <input type="submit" value="Eliminar" class="btn btn-danger">
                        </div>
                        <div class="col-md text-center">
                            <a href="bienvenido.php" class="btn btn-primary">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>