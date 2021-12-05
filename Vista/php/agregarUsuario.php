<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Agregar Nuevos Usuarios</title>
</head>

<body>
    <h1 class="display-5 text-center">
        Agregar Usuarios
    </h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="../../Controlador/agregaUsuario.php" method="POST" enctype="multipart/form-data">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="nombres">
                                <label>Nombres</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="apellidos">
                                <label>Apellidos</label>
                                <br>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-center">Domicilio</h5>
                    <div class="row g-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="calle">
                                <label>Calle</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="numero">
                                <label>Número de Casa</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="colonia">
                                <label>Colonia</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h5 class="text-center">Fecha de Nacimiento</h5>
                    <div class="row g-3">
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" name="dia">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <?php
                                    for ($i = 01; $i < 32; $i++) {
                                    ?>
                                        <option> <?php echo $i; ?> </option>
                                    <?php } ?>
                                </select>
                                <label>Día</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" name="mes">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                    <option>06</option>
                                    <option>07</option>
                                    <option>08</option>
                                    <option>09</option>
                                    <option>10</option>
                                    <?php
                                    for ($i = 11; $i < 13; $i++) {
                                    ?>
                                        <option> <?php echo $i; ?> </option>
                                    <?php } ?>
                                </select>
                                <label>Mes</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" name="anio">
                                    <?php
                                    for ($i = 1990; $i < 2051; $i++) {
                                    ?>
                                        <option> <?php echo $i; ?> </option>
                                    <?php } ?>
                                </select>
                                <label>Año</label>
                                <br>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-center">Información de Contacto y Rol</h5>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <select name="puesto" class="form-select" name="puesto">
                                    <option>Gerente</option>
                                    <option>Administrador</option>
                                </select>
                                <label>Puesto del Usuario</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="telefono">
                                <label>Teléfono</label>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="correo">
                                <label>Correo electrónico</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="password" name="psw" class="form-control">
                                <label>Contraseña</label>
                                <br>
                            </div>
                        </div>
                    </div>
                    <h5 class="text-center">Imagen del Usuario</h5>
                    <div class="col-md">
                        <input class="form-control" type="file" name="imagen" multiple required>
                        <br>
                    </div>
                    <div class="row g-2">
                        <div class="col-md text-center">
                            <input type="submit" value="Registrar" class="btn btn-primary">
                        </div>
                        <div class="col-md text-center">
                            <a href="" class="btn btn-secondary">Cancelar Registro</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>