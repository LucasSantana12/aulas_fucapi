<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
</head>
<body>

<body>
<form method="GET" action="exercicio1.php">
<label for="tabela">Escolha a sua tabela ao lado</label>

<select name="tabela" id="tabela">

<option> Escolha a tabela</option>
  <option value="categorias">Categorias</option>
  <option value="clientes">Clientes</option>
  <option value="detpedidos">Detpedidos</option>
  <option value="pedidos">Pedidos</option>
  <option value="produtos">Produtos</option>
  
</select>
<input type="submit" value="confirmar">
</form>
    
</body>
</html>


<?php

if(!isset($_GET["tabela"])){
    echo "<h1>A tabela não foi selecionada.</h1>";
    exit;
}

$table = $_GET['tabela'];


$conn = new PDO('mysql:dbname=aula_php;host=127.0.0.1','root','');

$stmy = $conn-> prepare("SELECT * FROM ".$table);
$stmy->execute();

$result= $stmy->fetchALL(PDO::FETCH_ASSOC);



if(count($result)){
echo '<br/>';
echo "<h1>Tabela de $table</h1>";

foreach($result as $linha){
    echo"-------------"."<br>";
    foreach($linha as $chave => $valor){
        echo $chave.":".$valor;
        echo'<br/>';
        
    }
    

    
}; echo"-------------";
}else{
    echo "<h1>Tabela Inexistente</h1>";
}
?> 
