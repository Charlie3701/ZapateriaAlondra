<?php
class Venta{
    private $idUsuario;
    private $idCalzado;
    private $numeroLocal;
    private $domicilio;
    private $garantia;
    private $cantidadPares;
    private $fecha;

    //Set's
    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function setIdCalzado($idCalzado){
        $this->idCalzado = $idCalzado;
    }

    public function setNumeroLocal($numeroLocal){
        $this->numeroLocal = $numeroLocal;
    }

    public function setDomicilio($domicilio){
        $this->domicilio = $domicilio;
    }

    public function setGarantia($garantia){
        $this->garantia = $garantia;
    }

    public function setCantidadPares($pares){
        $this->cantidadPares = $pares;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    //Get's
    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function getIdCalzado(){
        return $this->idCalzado;
    }

    public function getNumeroLocal(){
        return $this->numeroLocal;
    }

    public function getDomicilio(){
        return $this->domicilio;
    }

    public function getGarantia(){
        return $this->garantia;
    }

    public function getCantidadPares(){
        return $this->cantidadPares;
    }

    public function getFecha(){
        return $this->fecha;
    }
}
?>