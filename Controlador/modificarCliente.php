<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

/*
echo $id;
echo $nombre;
echo $telefono;
echo $correo;
*/

include("../Modelo/Cliente.php");
$cliente = new Cliente();

$cliente->setId($id);
$cliente->setNombre($nombre);
$cliente->setTelefono($telefono);
$cliente->setCorreoElectronico($correo);

include("../Persistencia/ClienteDAO.php");
$clienteDao = new ClienteDAO();

$clienteDao->modificarCliente($cliente);
header("Location: ../Vista/php/verClientes.php");