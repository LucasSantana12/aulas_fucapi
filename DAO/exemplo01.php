

<?php
/*
require_once('Sql.php');
$sql = new Sql();
$produtos = $sql->select('SELECT * FROM pedidos');
var_dump($produtos);


*/

require_once ('classes/Produto.php');
$produtos = Produto::getList();

echo $produtos;
?>