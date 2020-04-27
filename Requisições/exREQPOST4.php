<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CADASTRO</title>
  </head>
  <body>
  <div class="container">
  <br>
   <?php
    if($_SERVER["REQUEST_METHOD"]!="POST"){
        echo "<h1 class='text-center'> NÃO ENVIADO</h1>";
        exit;
    }
    $conector = new PDO('mysql:dbname=prova;host=127.0.0.1','root','');

    $stmt = $conector->prepare("INSERT INTO produtos(produto, preco,idCategoria)
      values(:produto,:preco,:idCategoria)
      ");

    $produto = $_POST["produto"];
    $preco = $_POST["preco"];
    $idCategoria = $_POST["idCategoria"];

    $stmt->BindParam(":produto",$produto);
    $stmt->BindParam(":preco",$preco);
    $stmt->BindParam(":idCategoria",$idCategoria);

   if($stmt->execute()){
    echo "";
   }else{
    echo " ERRO";
    print_r($stmt->errorInfo());
    exit;
   }
   ?>
   <h1 class="text-center">Produto inserido com sucesso!<h1>
<div class="row"> 
   <div class="col text-center">
   <a class href="ex4.php">
   <button type="submit" class="btn btn-primary">Voltar</button>
  </a>
   </div>
</div>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
