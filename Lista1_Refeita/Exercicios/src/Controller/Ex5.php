<?php


namespace Aluno\Francisco\Controller;


class Ex5
{
    public static function exibir()
    {
        require_once("../src/View/exercicio5.php");
    }
    public static function exibirResultado()
    {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];
        $mediaA = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        if ($mediaA > 7)
            $result = " Você foi aprovado!!!";
        else
            $result = "Você foi reprovado!";

        require_once("../src/View/exercicio5.php");
    }
}
