<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Modificar Mercancía</title>
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
    <div class="container">
        <h5 class="text-center">Ingrese el ID del calzado a modificar</h5>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="../../Controlador/modificarInventario.php" method="POST">
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
                    <h5 class="text-center">Ingrese los datos a modificar</h5>
                    <div class="form-floating">
                        <select name="idProveedor" class="form-select">
                            <?php
                            $nombres = $proveedorDao->nombreProveedores();
                            while ($tabla = mysqli_fetch_array($nombres)) {
                            ?>
                                <option> <?php echo $tabla[0]; ?> </option>
                            <?php } ?>
                        </select>
                        <label>Proveedor</label>
                        <br>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="estilo">
                                <label>Estilo</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" name="color">
                                    <option>Azul</option>
                                    <option>Mostaza</option>
                                    <option>Rojo</option>
                                    <option>Negro Charol</option>
                                    <option>Blanco</option>
                                    <option>Tan</option>
                                    <option>Poema</option>
                                    <option>Lila</option>
                                    <option>Antimonio</option>
                                    <option>Rosa Pastel</option>
                                    <option>Azul Pastel</option>
                                    <option>Amarillo Neón</option>
                                    <option>Rosa Neón</option>
                                    <option>Plata</option>
                                    <option>Oro/Rosado</option>
                                    <option>Cabra/Negra</option>
                                    <option>Maquillaje</option>
                                    <option>Crema</option>
                                    <option>Camel</option>
                                    <option>Melle</option>
                                    <option>Cafe</option>
                                    <option>Animal Prime</option>
                                    <option>Arcoiris</option>
                                </select>
                                <label class="form-floating">Color</label>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="numero">
                                <label>Número</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="cantidad">
                                <label>Cantidad</label>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="precio">
                                <label>Precio</label>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-6 align-self-center">
                            <button class="btn btn-primary" type="submit">Modificar Registro</button>
                        </div>
                        <div class="col-6 align-self-center">
                            <a class="btn btn-danger" href="bienvenido.php" role="button">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>