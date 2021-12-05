<?php
class Socio{
    private $encargado;
    private $numeroLocal;

    //Set's
    public function setEncargado($encargado){
        $this->encargado = $encargado;
    }

    public function setNumeroLocal($numero){
        $this->numeroLocal = $numero;
    }

    //Get's
    public function getEncargado(){
        return $this->encargado;
    }

    public function getNumeroLocal(){
        return $this->numeroLocal;
    }
}
?>