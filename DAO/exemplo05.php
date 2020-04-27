<?php

//Atualizar um produto buscando pelo nome

require_once("classes/Produto.php");

$produto = Produto::search("Mesa");

if($produto!=null){
	$produto->setProduto("Mesa 90x100cm");
	$produto->update();
	echo "Produto atualizado!";
}


?>