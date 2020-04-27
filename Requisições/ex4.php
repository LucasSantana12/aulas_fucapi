<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CADASTRO DE PRODUTOS</title>
  </head>
  <body>
    <h1>CADASTRO DE PRODUTOS</h1>

    <form class="container" method="post" action = "exREQPOST4.php"> 

  <div class="form-group">
    <label>Produtos</label>
    <input type="text" class="form-control" id="produto" name="produto">
  </div>

  <div class="form-group">
    <label>Preço</label>
    <input type="text" class="form-control" id="preco" name="preco">
  </div>

  <div class="form-group">
    <label>Categorias</label>
    <select class="form-control" id="categoria" name="idCategoria">

    <?php

$conector = new PDO('mysql:dbname=prova;host=127.0.0.1','root','');

$stmt = $conector->prepare("SELECT *FROM categorias");

$stmt->execute();

$results= $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($results as $linhas){
      echo "<option value=$linhas[idCategoria]> 
      $linhas[categoria]
      </option>";
    }

    ?>
    </select>
</div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
