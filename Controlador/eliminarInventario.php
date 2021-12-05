<?php
include("../Modelo/Inventario.php");
include("../Persistencia/InventarioDAO.php");

$id = $_POST['id'];

$inventario = new Inventario();
$inventario->setIdInventario($id);

$inventarioDao = new InventarioDAO();
$inventarioDao->eliminarInventario($inventario);

header("Location: ../Vista/php/bienvenido.php");