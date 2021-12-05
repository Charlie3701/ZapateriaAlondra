<?php
class ClienteDAO{
    private $server = "localhost";
    private $usr = "root";
    private $pass = "";
    private $db = "zapateria_alondra";

    private function Conectar(){
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

    public function consultarClientes(){
        $conexion = $this->Conectar();
        $query = "SELECT * FROM clientes";
        $resultado = mysqli_query($conexion, $query);

        return $resultado;
    }

    public function agregar(Cliente $cliente){
        $conexion = $this->Conectar();
        $query = "INSERT INTO clientes (nombre,telefono,correoElectronico) VALUES ('".$cliente->getNombre().
        "' , '".$cliente->getTelefono()."' , '".$cliente->getCorreoElectronico()."')";
        $resultado = mysqli_query($conexion,$query);

        return $resultado;
    }

    public function verIDs(){
        $conexion = $this->Conectar();
        $query = "SELECT idCliente FROM clientes";
        //$resultado = mysqli_query($conexion,$query);

        return $resultado = $conexion->query($query);
    }

    public function eliminarCliente($id){
        $conexion = $this->Conectar();
        $query = "DELETE FROM clientes WHERE idCliente='".$id."'";
        $resultado = mysqli_query($conexion,$query);

        return $resultado;
    }

    public function modificarCliente(Cliente $cliente){
        $conexion = $this->Conectar();
        $query = "UPDATE clientes set nombre='".$cliente->getNombre()."' , telefono='".$cliente->getTelefono().
        "' , correoElectronico='".$cliente->getCorreoElectronico()."' WHERE idCliente='".$cliente->getId()."'";
        $resultado = mysqli_query($conexion,$query);
        
        return $resultado;
    }
}