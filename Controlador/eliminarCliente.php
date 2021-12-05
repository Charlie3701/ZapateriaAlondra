<?php
$id = $_POST['id'];

include("../Persistencia/ClienteDAO.php");
$clienteDao = new ClienteDAO();
$clienteDao->eliminarCliente($id);
header("Location: ../Vista/php/verClientes.php");