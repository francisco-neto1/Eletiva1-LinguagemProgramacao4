<?php

require_once __DIR__ . '/vendor/autoload.php';

//Aqui a gente recupera o que o usuário digitou e qual 
//método HTTP ele utilizou
$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

//Instanciar classe Router
$router = new \Aluno\Francisco\Router($method, $path);

//ADICIONAR AS ROTAS VÁLIDAS ABAIXO

//Exercio 1
$router->get(
        '/exercicio1',
        'Aluno\Francisco\Controller\Ex1::exibir'
);

$router->post(
        '/exercicio1-resultado',
        'Aluno\Francisco\Controller\Ex1::exibirResultado'
);

//exercicio 2
$router->get(
        '/exercicio2',
        'Aluno\Francisco\Controller\Ex2::exibir'
);

$router->post(
        '/exercicio2-resultado',
        'Aluno\Francisco\Controller\Ex2::exibirResultado'
);

//exercicio 3
$router->get(
        '/exercicio3',
        'Aluno\Francisco\Controller\Ex3::exibir'
);

$router->post(
        '/exercicio3-resultado',
        'Aluno\Francisco\Controller\Ex3::exibirResultado'
);

//exercicio 4
$router->get(
        '/exercicio4',
        'Aluno\Francisco\Controller\Ex4::exibir'
);

$router->post(
        '/exercicio4-resultado',
        'Aluno\Francisco\Controller\Ex4::exibirResultado'
);

//exercicio 5
$router->get(
        '/exercicio5',
        'Aluno\Francisco\Controller\Ex5::exibir'
);

$router->post(
        '/exercicio5-resultado',
        'Aluno\Francisco\Controller\Ex5::exibirResultado'
);

//ADICIONAR AS ROTAS VÁLIDAS ACIMA

$result = $router->handler();

if (!$result) {
        http_response_code(404);
        echo "Página não encontrada";
        die();
}

echo $result($router->getParams());
