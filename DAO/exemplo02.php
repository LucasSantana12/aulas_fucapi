<?php

require_once('classes/Produto.php');

$produto = new Produto();
$produto->loadById(10);

echo $produto;

?>