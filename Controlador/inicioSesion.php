<?php
//Recuperar Datos del Formulario
$usuario = $_POST["correo"];
$contrasena = $_POST["contrasena"];

include("../Persistencia/UsuarioDAO.php");

$usuarioDAO = new UsuarioDAO;
$login = $usuarioDAO->Login($usuario, $contrasena);
if ($login == null) {
    //header("Location: ../index.php");
    //die();
} else {
    session_start();
    $_SESSION['usuario'] = $login[1];
    $_SESSION['puesto'] = $login[4];
    $_SESSION['IdUsuario'] = $login[0];
    header("Location: ../Vista/php/bienvenido.php");
    die();
}
