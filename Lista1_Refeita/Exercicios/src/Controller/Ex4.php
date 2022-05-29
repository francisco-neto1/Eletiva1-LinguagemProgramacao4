<?php


namespace Aluno\Francisco\Controller;


class Ex4
{
    public static function exibir()
    {
        require_once("../src/View/exercicio4.php");
    }
    public static function exibirResultado()
    {
        $valor = $_POST['valor'];

        if ($valor > 0)
            $result = "O valor é positivo";
        if ($valor < 0)
            $result = "O valor é negativo";
        if ($valor == 0)
            $result = "O valor é igual a 0";

        require_once("../src/View/exercicio4.php");
    }
}
