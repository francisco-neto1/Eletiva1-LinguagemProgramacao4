<?php


namespace Aluno\Francisco\Controller;


class Ex1
{

    public static function exibir()
    {
        require_once("../src/View/exercicio1.php");
    }


    public static function exibirResultado()
    {
        $valorP = $_POST['valorP'];
        $preco = $_POST['preco'];
        $troco = $valorP - $preco;
        require_once("../src/View/exercicio1.php");
    }
}
