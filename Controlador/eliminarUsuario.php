<?php
include ("../Persistencia/UsuarioDAO.php");

$id = 10;

$eliminarUsuario = new UsuarioDAO();

if ($eliminarUsuario->eliminar($id) == true){
    echo "<p>Usuario Eliminado</p>";
} else {
    echo "<p>Error al eliminar al usuario</p>";
}