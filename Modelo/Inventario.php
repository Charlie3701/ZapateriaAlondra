<?php
class Inventario{
    private $idInventario;
    private $idProveedor;
    private $estilo;
    private $color;
    private $numero;
    private $cantidad;
    private $precio;

    //Set's
    public function setIdInventario($id){
        $this->idInventario = $id;
    }

    public function setIdProveedor($idProveedor){
        $this->idProveedor = $idProveedor;
    }

    public function setEstilo($estilo){
        $this->estilo = $estilo;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
    }
    
    public function setPrecio($precio){
        $this->precio = $precio;
    }

    //Get's
    public function getIdInventario(){
        return $this->idInventario;
    }

    public function getIdProveedor(){
        return $this-> idProveedor;
    }

    public function getEstilo(){
        return $this-> estilo;
    }

    public function getColor(){
        return $this-> color;
    }

    public function getNumero(){
        return $this-> numero;
    }

    public function getCantidad(){
        return $this-> cantidad;
    }

    public function getPrecio(){
        return $this-> precio;
    }
}