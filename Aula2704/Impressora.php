<?php 

class Impressora{

    private $marca;
    private $modelo;
    private $colorido;
    private $peso;

     public function getMarca(){
         return $this->marca;
     }
     public function getModelo(){
        return $this->modelo;
    }
    public function getColorido(){ 
        return $this->colorido;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setColorido($colorido){
        $this->colorido = $colorido;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
}
