<?php
class ProveedorDAO{
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

    public function nombreProveedores(){
        $conexion = $this->Conectar();
        $consulta = "select nombre from proveedores";

        return $proveedores = $conexion->query($consulta); 
    }

    public function IdProovedor($nombre){
        $conexion = $this->Conectar();
        $consulta = "select idProveedor from proveedores where nombre='".$nombre."'";

        return $nombre = $conexion->query($consulta);
    }

    public function nombrePorId($id){
        $conexion = $this->Conectar();
        $consulta = "SELECT nombre FROM proveedores WHERE idProveedor='".$id."'";
        $resultado = mysqli_query($conexion,$consulta);

        return $resultado;
    }
}