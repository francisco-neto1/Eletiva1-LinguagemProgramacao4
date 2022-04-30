<?php 
require_once("Ponto.php");
$p1 = new Ponto(2, 4);
echo "Quantidade De objetos criados:".Ponto::getContador();

$p2 = new Ponto(5, 3);
echo "Quantidade De objetos criados:".$p1->CalcularDistancia($p2). "<br/>";
echo "Quantidade De objetos criados:".$p1->CalcularDistancia1(5, 3). "<br/>";
echo "Quantidade De objetos criados:".$p1->CalcularDistancia2(1, 2, 6, 9);
?>