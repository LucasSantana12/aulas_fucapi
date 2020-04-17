<?php

echo "<h1>Imprimindo um array</h1>";
$cores = array("azul","vermelho","amarelo","verde");
print_r($cores);

echo "<h1>Percorrendo um array</h1>";
foreach($cores as $valor){
    echo $valor;
}

echo "<h1>Percorrendo um array forma 2</h1>";
$cores = ["azul","vermelho","amarelo","verde"];
foreach($cores as $chave => $valor){
    echo "$chave:$valor <br>";
}

echo "<h1> Percorrendo um dicionario</h1>";
$arr = [ 
    "nome"=>"Roberto",
    "sobrenome"=>"Junior",
    "idade"=>23
];
foreach($arr as $chave => $valor){
    echo $chave."=>".$valor."<br/>";
}
?>