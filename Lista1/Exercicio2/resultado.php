<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 2</title>
  </head>
  <body>
    <h1>Exercicio 2</h1>
    <?php 
    $a =$_POST['a'];
    $b =$_POST['b'];
    echo"O valor recebido foi :  $a O valor do produto é: $b"; 
    echo "<br/>";
    $Precodoproduto = ($a * $b);
    echo "O Preço do produto será: $Precodoproduto"
    ?>