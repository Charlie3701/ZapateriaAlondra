<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Agregar Mercancia</title>
</head>

<body>
    <div class="container">
        <h1 class="display-5 text-center"> Ingresar Nueva Mercancía</h1>
        <div class="row justify-content-center">
            <div class="col-6">
                <form action="../../Controlador/insertarInventario.php" method="POST">
                    <label class="form-label">Ingrese el proveedor</label>
                    <select class="form-select" name="idProveedor">
                        <?php
                        include("../../Persistencia/ProveedorDAO.php");

                        $proveedores = new ProveedorDAO();
                        $nombres = $proveedores->nombreProveedores();
                        while ($indice = mysqli_fetch_array($nombres)) {
                        ?>
                            <option> <?php echo $indice[0] ?> </option>
                        <?php } ?>
                    </select>
                    <br>
                    <div class="row g-2">
                        <div class="col-md">
                            <label class="form-label">Ingrese el estilo</label>
                            <input type="number" class="form-control" name="estilo">
                        </div>
                        <div class="col-md">
                            <label class="form-label">Color</label>
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
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row g-2">
                        <div class="col-md">
                            <label class="form-label">Ingrese el número</label>
                            <input type="number" class="form-control" name="numero">
                        </div>
                        <div class="col-md">
                            <label class="form-label">Ingrese la cantidad de calzado</label>
                            <input type="number" class="form-control" name="cantidad">
                        </div>
                    </div>
                    <br>
                    <br>
                    <label class="form-label">Ingrese el precio</label>
                    <div class="input-group">
                        <div class="input-group-text">$</div>
                        <input type="number" class="form-control" id="autoSizingInputGroup" name="precio">
                    </div>
                    <br>
                    <div class="row text-center">
                        <div class="col-6 align-self-center">
                            <button class="btn btn-primary" type="submit">Registrar</button>
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