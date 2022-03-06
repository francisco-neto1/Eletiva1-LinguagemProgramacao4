<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Exercicio 3</title>
  </head>
  <body>
    <h1>Exercicio 3</h1>
    <?php 
    $a =$_POST['a'];
    if($a > 10)
    {
      echo "O valor é maior que 10 ";
    }
    elseif($a == 10)
    {
        echo "O Valor é Igual a 10";
    }
    else
    {
        echo "O Valor é menor que 10 ";
    }
    ?>