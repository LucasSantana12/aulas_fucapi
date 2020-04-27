<?php

//Inserir um produto
require_onde('classes/Produto.php');
$produto = new Produto;
$Produto->setData("Celular Galaxy",5000,4);

$produto->insert();

echo "Dados inseridos!";
?>