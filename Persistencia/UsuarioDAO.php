<?php
//include("../Modelo/Usuario.php");

class UsuarioDAO{
    private $server = "localhost";
    private $usr = "root";
    private $pass = "";
    private $db = "zapateria_alondra";

    private function Conectar()
    {
        try {
            $mysqli = new mysqli(
                $this->server,
                $this->usr,
                $this->pass,
                $this->db
            );
            return $mysqli;
        } catch (mysqli_sql_exception $e) {
            throw $e;
        }
    }

    public function Login($usuario, $contrasena){
        $conexion = $this->Conectar();
        $consulta = "select * from usuarios where correo='" . $usuario . "' and contrasena='" . $contrasena . "'";
        $resultado = $conexion->query($consulta);
        $filas = $resultado->fetch_row();
        
        return $filas;
    }

    public function agregar(Usuario $usuario){
        $conexion = $this->Conectar();
        $query = "INSERT INTO usuarios (nombre, domicilio, fechaNacimiento, puesto, telefono, correo, contrasena,
        imagen) VALUES ('".$usuario->getNombre()."' , '".$usuario->getDomicilio()."' , '".$usuario->getFechaNac().
        "' , '".$usuario->getPuesto()."' , '".$usuario->getTelefono()."' , '".$usuario->getCorreo()."' , '"
        .$usuario->getContrasena()."' , '".$usuario->getImagen()."')";
        $resultado = mysqli_query($conexion, $query);

        return $resultado;
    }

    public function lecturaUsuarios(){
        $conexion = $this->Conectar();
        $query = "select * from usuarios";

        return $conexion->query($query);
    }

    public function lecturaUsuarioID($id){
        $conexion = $this->Conectar();
        $query = "select * from usuarios where idUsuario=".$id;

        return $conexion->query($query);
    }

    public function eliminar($id){
        $conexion = $this->Conectar();
        $query = "delete from usuarios where idUsuario=".$id;

        return $conexion->query($query);
    }

    public function sendImagen($id){
        $conexion = $this->Conectar();
        $query = "SELECT imagen FROM usuarios WHERE idUsuario='".$id."'";
        $resultado = mysqli_query($conexion,$query);

        return $resultado;
    }
}
