<?php

if(!isset($_GET["tabela"])){
    echo "<h1>index 'tabela' não existe.</h1>";
    exit;
}

$table = $_GET['tabela'];


$conn = new PDO('mysql:dbname=prova;host=127.0.0.1','root','');

$stmy = $conn-> prepare("SELECT * FROM ".$table);
$stmy->execute();

$result= $stmy->fetchALL(PDO::FETCH_ASSOC);



if(count($result)){
echo '<br/>';
echo "<h1>Tabela de Produtos</h1>";

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
