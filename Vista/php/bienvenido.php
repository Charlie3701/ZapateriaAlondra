<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Página de Inicio</title>
</head>

<body>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-2">
                <a href="bienvenido.php"><img src="../img/logo.png" alt="Página de inicio" class="rounded-circle" width="100" height="100"></a>
            </div>
            <div class="col-8 text-center">
                <!--  Código para mostrar imágeneres desde Base de Datos  -->
                <?php 
                include("../../Persistencia/UsuarioDAO.php");
                $usuarioDao = new UsuarioDAO();
                $resultado = $usuarioDao->sendImagen($_SESSION['IdUsuario']);

                $result = mysqli_fetch_array($resultado);
                echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['imagen'] ).'" class="rounded-circle"
                 width="75" height="75"/>';
                ?>
                <h2>Bienvenid@ <?php echo $_SESSION['usuario'] ?></h2>
            </div>
            <div class="col-2"> 
                <form action="../../Controlador/cerrarSesion.php">
                    <input class="btn btn-primary" type="submit" value="Cerrar Sesión">
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row align-items-center">
            <?php if ($_SESSION['puesto'] == "Gerente") { ?>
                <div class="col-2">
                    <div class="d-grid gap-2">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="menuClientes" data-bs-toggle="dropdown" aria-expanded="false">
                                Módulo Clientes
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="menuClientes">
                                <li><a class="dropdown-item" href="verClientes.php">Ver Clientes</a></li>
                                <li><a class="dropdown-item" href="modificarCliente.php">Modificar Cliente</a></li>
                                <li><a class="dropdown-item" href="eliminarCliente.php">Eliminar Cliente</a></li>
                                <li><a class="dropdown-item" href="nuevoCliente.php">Agregar Cliente</a></li>
                            </ul>
                        </div>
                    </div>
                    <br><br>
                    <div class="d-grid gap-2">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="menuInventario" data-bs-toggle="dropdown" aria-expanded="false">
                                Módulo Inventario
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="menuInventario">
                                <li><a class="dropdown-item" href="agregarMercancia.php">Agregar Mercancía</a></li>
                                <li><a class="dropdown-item" href="modificarMercancia.php">Modificar Mercancía</a></li>
                                <li><a class="dropdown-item" href="eliminarMercancia.php">Eliminar Registros</a></li>
                            </ul>
                        </div>
                    </div>
                    <br><br>
                    <a class="btn btn-primary" href="realizarVenta.php" role="button">Realizar Venta</a>
                    <br><br>
                    <a href="../../Controlador/correoPrueba.php" class="btn btn-primary">Enviar Correos *Beta</a>
                </div>
            <?php } elseif ($_SESSION['puesto'] == "Dueño" || $_SESSION['puesto'] == "Administrador") { ?>
                <div class="col-2">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="menuUsuarios" data-bs-toggle="dropdown" aria-expanded="false">
                            Módulo Usuarios
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="menuUsuarios">
                            <li><a class="dropdown-item" href="agregarUsuario.php">Agregar Usuario</a></li>
                            <li><a class="dropdown-item" href="">Modificar Usuario</a></li>
                            <li><a class="dropdown-item" href="">Eliminar Usuario</a></li>
                            <li><a class="dropdown-item" href="">Ver Usuarios</a></li>
                        </ul>
                    </div>
                    <br>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="menuProveedores" data-bs-toggle="dropdown" aria-expanded="false">
                            Módulo Proveedores
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="menuProveedores">
                            <li><a class="dropdown-item" href="">Agregar Proveedor</a></li>
                            <li><a class="dropdown-item" href="">Modificar Proveedor</a></li>
                            <li><a class="dropdown-item" href="">Eliminar Proveedor</a></li>
                            <li><a class="dropdown-item" href="">Ver Proveedores</a></li>
                        </ul>
                    </div>
                    <br>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="menuVentas" data-bs-toggle="dropdown" aria-expanded="false">
                            Módulo Ventas
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="menuVentas">
                            <li><a class="dropdown-item" href="">Ver Ventas</a></li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
            <div class="col-10">
                <h2 class="display-5 text-center">Inventario Existente</h2>
                <table class="table table-striped">
                    <thead>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Estilo</th>
                        <th scope="col">Color</th>
                        <th scope="col">Número</th>
                        <th scope="col">Precio</th>
                    </thead>
                    <tbody>
                        <?php
                        include("../../Persistencia/InventarioDAO.php");

                        $inventario = new InventarioDAO();
                        $vista = $inventario->consultarInventario();
                        while ($registros = mysqli_fetch_array($vista)) {
                        ?>
                            <tr>
                                <td> <?php echo $registros[5] ?> </td>
                                <td> <?php echo $registros[2] ?> </td>
                                <td> <?php echo $registros[3] ?> </td>
                                <td> <?php echo $registros[4] ?> </td>
                                <td> <?php echo $registros[6] ?> </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>