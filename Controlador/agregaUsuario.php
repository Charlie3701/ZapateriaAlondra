<?php
include("../Persistencia/UsuarioDAO.php");
include("../Modelo/Usuario.php");

/*Captura de Datos:*/
/*$nombre = "Alejandra Cruz Islas";
$domicilio = "Calle de la Luz, Col. Agua Azul, León, Gto.";
$fechaNac = "2000/12/14";
$puesto = "Encargada";
$telefono = "4771000000";
$correo = "correo@gmail.com";
$contrasena = "147852";
$imagen = "1258888826985";
*/
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$nombreCompleto = $nombres . " " . $apellidos;

$calle = $_POST['calle'];
$numero = $_POST['numero'];
$colonia = $_POST['colonia'];
$domicilio = "Calle " . $calle . " #" . $numero . " Col. " . $colonia;

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];
$fechaNac = $anio . "/" . $mes . "/" . $dia;

$puesto = $_POST['puesto'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$psw = $_POST['psw'];
$image = $_FILES['imagen']['tmp_name'];
$imgContent = addslashes(file_get_contents($image));

$nuevo_usuario = new Usuario();

$nuevo_usuario->setNombre($nombreCompleto);
$nuevo_usuario->setDomicilio($domicilio);
$nuevo_usuario->setFechaNac($fechaNac);
$nuevo_usuario->setPuesto($puesto);
$nuevo_usuario->setTelefono($telefono);
$nuevo_usuario->setCorreo($correo);
$nuevo_usuario->setContrasena($psw);
$nuevo_usuario->setImagen($imgContent);

$usuarioDao = new UsuarioDAO();
$usuarioDao->agregar($nuevo_usuario);
header("Location: ../Vista/php/bienvenido.php");
