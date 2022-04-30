<?php 

class Ponto{

    private $x;
    private $y;
    private static $contador;

    public function __construct($x, $y)
    {
     $this->setX($x);
     $this->setY($y);   
     self::setContador();
    }
    public function CalcularDistancia(Ponto $p)
    {
        $valorX =pow(($p->getX() - $this->x), 2) ;
        $valorY =pow((($p->getY() - $this->y)), 2);
        return sqrt($valorX + $valorY);
    }
    
    public function CalcularDistancia1($x2, $y2)
    {
        return sqrt(pow(($x2 - $this->x), 2) + pow(($y2 - $this->y), 2));
    }

    public function CalcularDistancia2($x1, $x2, $y1, $y2)
    {
        return sqrt(pow(($x1 - $x2), 2) + pow(($y1 - $y2), 2));
    }

    private static function setContador()
    {
        self::$contador++;
    }
    public static function getContador()
    {
        return self::$contador;
    } 

    public function getX(){
        return $this->x;
    }

    public function setX($x){
        $this->x = $x;
    }
    public function getY(){
        return $this->y;
    }

    public function setY($y){
        $this->y = $y;
    }
}