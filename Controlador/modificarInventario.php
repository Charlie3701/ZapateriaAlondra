<?php
include("../Modelo/Inventario.php");
include("../Persistencia/InventarioDAO.php");
include("../Persistencia/ProveedorDAO.php");

$id = $_POST['id'];
$nombreProveedor = $_POST['idProveedor'];
$estilo = $_POST['estilo'];
$color = $_POST['color'];
$numero = $_POST['numero'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

//Búsqueda del ID del Proveedor
$proveedorDao = new ProveedorDAO();
$resultado = $proveedorDao->IdProovedor($nombreProveedor);
$ids = mysqli_fetch_array($resultado);
$idProveedor = $ids[0];

$inventario = new Inventario();
$inventario->setIdInventario($id);
$inventario->setIdProveedor($idProveedor);
$inventario->setEstilo($estilo);
$inventario->setColor($color);
$inventario->setNumero($numero);
$inventario->setCantidad($cantidad);
$inventario->setPrecio($precio);

$inventarioDao = new InventarioDAO();
$inventarioDao->modificarInventario($inventario);
header("Location: ../Vista/php/bienvenido.php");