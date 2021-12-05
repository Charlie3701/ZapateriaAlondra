<?php
include ("../Persistencia/UsuarioDAO.php");

$lectura_usuarios = new UsuarioDAO();
$consulta = $lectura_usuarios->lecturaUsuarios();

if($consulta == true){
    while($fila = $consulta->fetch_row()){
        echo "ID de Usuario: ".$fila[0].", Nombre: ".$fila[1].", Domicilio: ".$fila[2]." , Fecha de Nacimiento: "
        .$fila[3]." , Puesto: ".$fila[4]." , Teléfono: ".$fila[5]." , Correo electrónico: ".$fila[6]." , Contraseña:"
        .$fila[7]."<br>";
    }
} else {
    echo "<p>Error al Realizar la Consulta</p>";
}