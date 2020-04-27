<?php

require_once("classes/Produto.php");

$produto = new Produto;
$produto0->loadById(1);
echo $produto;
$produto->setProduto("CAMA BOX");
echo $produto;
$produto->update();

echo "produto atualizado!";

?>