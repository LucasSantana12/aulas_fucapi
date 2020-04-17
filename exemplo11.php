<?php

echo "<h1>Imprimindo um array</h1>";
$cores = array("azul","vermelho","amarelo","verde");
print_r($cores);

echo "<h1>Percorrendo um array</h1>";
foreach($cores as $valor){
    echo $valor;
}

?>