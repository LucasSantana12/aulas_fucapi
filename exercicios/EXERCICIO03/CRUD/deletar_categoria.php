<?php

require_once("classes/Categoria.php");


$cat = new Categorias;

$cat -> loadById($_GET['idCategoria']);

$cat -> delete();

header('Location: categorias.php');

?>