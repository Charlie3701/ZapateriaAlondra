<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Realizar Venta</title>
</head>

<body>
    <h1 class="display-5 text-center">Módulo de Venta</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Estilo</th>
                            <th scope="col">Proveedor</th>
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
                                <td> <?php echo $fila[2]; ?> </td>
                                <td> <?php
                                        $nombre = $proveedorDao->nombrePorId($fila[1]);
                                        $registroNombre = mysqli_fetch_array($nombre);
                                        echo $registroNombre[0];
                                        ?> </td>
                                <td> <?php echo $fila[3]; ?> </td>
                                <td> <?php echo $fila[4]; ?> </td>
                                <td> <?php echo $fila[5]; ?> </td>
                                <td> <?php echo $fila[6]; ?> </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <h5 class="text-center">Ingrese los datos de la mercancía</h5>
                <form action="" method="GET">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating">
                                    <select class="form-select" id="floatingSelect" name="estilo">
                                        <?php 
                                        $estilos = $inventarioDao->verEstilos();
                                        $estilos2 = $estilos;
                                        while($indices = mysqli_fetch_array($estilos)){
                                        ?>
                                        <option> <?php echo $indices[0];?> </option>
                                        <?php } ?>
                                    </select>
                                    <label>Estilo del Calzado</label>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md" id="">
                                <div class="form-floating">
                                    <select name="color" id="" class="form-select">
                                       <?php  
                                      
                                       ?>
                                        <option>  <?php
                                          $color = $_GET['estilo'];
                                         echo $color; ?> </option>
                                    </select>
                                    <label>Color</label>
                                </div>
                            </div>
                            <div class="col-md">
                            <div class="col-md" id="">
                                <div class="form-floating">
                                    <select name="numero" id="" class="form-select">
                                        <option></option>
                                    </select>
                                    <label>Número del calzado</label>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>