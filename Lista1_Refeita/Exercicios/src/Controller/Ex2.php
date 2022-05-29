<?php


namespace Aluno\Francisco\Controller;


class Ex2
{
    public static function exibir()
    {
        require_once("../src/View/exercicio2.php");
    }
    public static function exibirResultado()
    {
        $valor = $_POST['valor'];
        $qtdeQ = $_POST['qtdeQ'];
        $valor = $valor * $qtdeQ;
        require_once("../src/View/exercicio2.php");
    }
}
