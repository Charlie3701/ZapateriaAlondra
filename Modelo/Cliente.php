<?php
class Cliente {
    //Atributos
    private $nombre;
    private $telefono;
    private $correoElectronico;
    private $id;

    //Set's
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setCorreoElectronico($correo){
        $this->correoElectronico = $correo;
    }

    public function setId($id){
        $this->id = $id;
    }

    //Get's
    public function getNombre(){
        return $this->nombre;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getCorreoElectronico(){
        return $this->correoElectronico;
    }
    
    public function getId(){
        return $this->id;
    }
}
?>