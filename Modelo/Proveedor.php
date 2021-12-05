<?php 
class Proveedor{
    private $nombre;
    private $telefono;
    private $direccion;

    //Set's
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    //Get's
    public function getNombre(){
        return $this->nombre;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getDireccion(){
        return $this->direccion;
    }
}
?>