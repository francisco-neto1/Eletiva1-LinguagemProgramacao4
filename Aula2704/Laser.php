<?php

class Matricial extends Impressora{


    private $capacidadeToner;
    private $frenteVerso;

    public function __construct($marca, $modelo, $capacidadeToner, $colorido, $frenteVerso, $peso)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setNumAgulhas($capacidadeToner);
        $this->setColorido($colorido);
        $this->setImprimeVias($frenteVerso);
        $this->setPeso($peso);
    }

    public function  getCapacidadeToner(){
        return $this->capacidadeToner;
    }
    public function  setNumAgulhas($capacidadeToner){
        $this->capacidadeToner = $capacidadeToner;
    }
    public function  getFrenteVerso(){
        return $this->frenteVerso;
    }
    public function  setFrenteVerso($frenteVerso){
        $this->frenteVerso = $frenteVerso;
    }
}