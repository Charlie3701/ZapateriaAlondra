<?php
class Traspaso{
    private $idCalzado;
    private $idSocio;

    //Set's
    public function setIdCalzado($idCalzado){
        $this->idCalzado = $idCalzado;
    }

    public function setIdSocio($idSocio){
        $this->idSocio = $idSocio;
    }

    //Get's
    public function getIdCalzado(){
        return $this->idCalzado;
    }

    public function getIdSocio(){
        return $this->idSocio;
    }
}
?>