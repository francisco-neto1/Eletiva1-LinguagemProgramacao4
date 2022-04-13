<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Lista 4</title>
</head>
<h1>Tempo das voltas</h1>
<body class="container">
  <?php
        session_start();
        $voltas = $_POST["voltas"];
        $_SESSION['qtdVoltas'] = $voltas;
  ?>
  <form action="resultados.php" method="POST">
        <?php
        for ($i = 0; $i < $voltas; $i++) {
        ?>
            <div class="row mt-3">
                <div class="col">
                    <label for="tempo<?= $i ?>" class="label-control"><?= $i+1 ?>) Informe o tempo da tempo:
                    </label>
                    <input type="text" name="tempo<?= $i ?>" id="tempo<?= $i ?>" class="form-control" />
                </div>
            </div>
        <?php
        }
        ?>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Calcular melhor tempo
                </button>
            </div>
        </div>
    </form>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>