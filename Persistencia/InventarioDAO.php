<?php
//include("../Modelo/Inventario.php");

class InventarioDAO{
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

    public function consultarInventario(){
        $conexion = $this->Conectar();
        $consulta = "select * from inventario";
        $resultado = $conexion->query($consulta);

        return $resultado;
    }

    public function agregarInventario(Inventario $inventario){
        $conexion = $this->Conectar();
        $consulta = "insert into inventario (idProveedor, estilo, color, numero, cantidad, precio) values ('"
        .$inventario->getIdProveedor()."','".$inventario->getEstilo()."','".$inventario->getColor()."','"
        .$inventario->getNumero()."','".$inventario->getCantidad()."','".$inventario->getPrecio()."')";
        
        return $insertar = $conexion->query($consulta);
    }

    public function verEstilos(){
        $conexion = $this->Conectar();
        $consulta = "select estilo from inventario";
        
        
        return $resultado = $conexion->query($consulta);
    }

    public function verColores($estilo){
        $conexion = $this->Conectar();
        $consulta = "SELECT color FROM inventario WHERE estilo='".$estilo."'";
        $resultado = mysqli_query($conexion, $consulta);

        return $resultado;
    }

    public function buscarEstilo($estilo){
        $conexion = $this->Conectar();
        $consulta = "select * from inventario where estilo='".$estilo."'";

        return $resultado = $conexion->query($consulta);
    }

    public function verIDsInventario(){
        $conexion = $this->Conectar();
        $consulta = "SELECT idCalzado FROM inventario";
        $resultado = mysqli_query($conexion,$consulta);

        return $resultado;
    }

    public function modificarInventario(Inventario $inventario){
        $conexion = $this->Conectar();
        $consulta = "UPDATE inventario SET idProveedor='".$inventario->getIdProveedor()."' , estilo='"
        .$inventario->getEstilo()."' , color='".$inventario->getColor()."' , numero='".$inventario->getNumero()
        ."' , cantidad='".$inventario->getCantidad()."' , precio='".$inventario->getPrecio()."' WHERE idCalzado='"
        .$inventario->getIdInventario()."'";
        $resultado = mysqli_query($conexion,$consulta);

        return $resultado;
    }

    public function eliminarInventario(Inventario $inventario){
        $conexion = $this->Conectar();
        $eliminar = "DELETE FROM inventario WHERE idCalzado='".$inventario->getIdInventario()."'";
        $resultado = mysqli_query($conexion,$eliminar);

        return $resultado;
    }
}