<?php
include("../Modelo/Cliente.php");
include("../Persistencia/ClienteDAO.php");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

$cliente = new Cliente();

$cliente->setNombre($nombre);
$cliente->setTelefono($telefono);
$cliente->setCorreoElectronico($correo);

//echo $cliente->getNombre();
//echo $cliente->getTelefono();
//echo $cliente->getCorreoElectronico();

$clienteDao = new ClienteDAO();

$clienteDao->agregar($cliente);
header("Location: ../Vista/php/verClientes.php");