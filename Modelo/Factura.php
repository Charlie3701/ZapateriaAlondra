<?php
class Factura{
    private $idCliente;
    private $idCalzado;
    private $nombreLocal;
    private $numeroLocal;
    private $telefono;

    //Set's
    public function setIdCliente($idCliente){
        $this->idCliente = $idCliente;
    }

    public function setIdCalzado($idCalzado){
        $this->idCalzado = $idCalzado;
    }

    public function setNombreLocal($nombreLocal){
        $this->nombreLocal = $nombreLocal;
    }

    public function setNumeroLocal($numeroLocal){
        $this->numeroLocal = $numeroLocal;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    //Get's
    public function getIdCliente(){
        return $this->idCliente;
    }

    public function getIdCalzado(){
        return $this->idCalzado;
    }

    public function getNombreLocal(){
        return $this->nombreLocal;
    }

    public function getNumeroLocal(){
        return $this->numeroLocal;
    }

    public function getTelefono(){
        return $this->telefono;
    }
}
?>