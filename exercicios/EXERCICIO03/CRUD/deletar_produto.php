<?php

require_once("classes/Produto.php");


$prod = new Produto;

$prod -> loadById($_GET['idProduto']);

$prod -> delete();

header('Location: produtos.php');

?>