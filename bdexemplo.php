<?php
$conn = new PDO('mysql:dbname=prova;host=127.0.0.1','root','');

$stmy = $conn-> prepare("SELECT * FROM categorias");
$stmy->execute();

$result= $stmy->fetchALL(PDO::FETCH_ASSOC);

var_dump($result);

echo '<br/>';
echo "<h1>Tabela de Produtos</h1>";

foreach($result as $linha){
    foreach($linha as $chave => $valor){
        echo $chave.":".$valor;
        echo'<br/>';
    }
};
echo"-------------"
?> 