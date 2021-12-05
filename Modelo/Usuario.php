<?php 
class Usuario{
    private $nombre;
    private $domicilio;
    private $fechaNacimiento;
    private $puesto;
    private $telefono;
    private $correo;
    private $contrasena;
    private $imagen;

    //Set's
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setDomicilio($domicilio){
        $this->domicilio = $domicilio;
    }

    public function setFechaNac($fecha){
        $this->fechaNacimiento = $fecha;
    }

    public function setPuesto($puesto){
        $this->puesto = $puesto;
    }

    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function setCorreo($correo){
        $this->correo = $correo;
    }

    public function setContrasena($contrasena){
        $this->contrasena = $contrasena;
    }

    public function setImagen($imagen){
        $this->imagen = $imagen;
    }

    //Get's
    public function getNombre(){
        return $this->nombre;
    }

    public function getDomicilio(){
        return $this->domicilio;
    }

    public function getFechaNac(){
        return $this->fechaNacimiento;
    }

    public function getPuesto(){
        return $this->puesto;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function getCorreo(){
        return $this->correo;
    }

    public function getContrasena(){
        return $this->contrasena;
    }

    public function getImagen(){
        return $this->imagen;
    }
}
?>