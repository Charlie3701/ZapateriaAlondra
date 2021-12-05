<?php
include("../Modelo/Inventario.php");
include("../Persistencia/InventarioDAO.php");
include("../Persistencia/ProveedorDAO.php");

$inventarioDao = new InventarioDAO();
$inventario = new Inventario();
$proveedorDao = new ProveedorDAO();

//Captura de datos del formulario
//Captura del ID del Proveedor
$idProveedor = $_POST['idProveedor'];
$id = $proveedorDao->IdProovedor($idProveedor);
$id = mysqli_fetch_row($id);
$idProveedor = $id[0];

$estilo = $_POST['estilo'];
$color = $_POST['color'];
$numero = $_POST['numero'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$inventario->setIdProveedor($idProveedor);
$inventario->setEstilo($estilo);
$inventario->setColor($color);
$inventario->setNumero($numero);
$inventario->setCantidad($cantidad);
$inventario->setPrecio($precio);

$inventarioDao->agregarInventario($inventario);
header("Location: ../Vista/php/bienvenido.php");