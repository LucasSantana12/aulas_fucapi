<?php

//excluir um produto
require_once("classes/Produto.php");
$produto = new Produto();
$produto->loadById(1);
$produto->delete();

echo "produto deletado!";

?>