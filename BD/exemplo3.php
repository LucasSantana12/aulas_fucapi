<?php

$conn = new PDO('mysql:dbname=prova;host=127.0.0.1','root','');

$stmt = $conn->prepare("
    UPDATE produtos
    SET produto =:PRODUTO, preco=:PRECO
    WHERE idProduto =:IDPRODUTO
    
");

$id = 21;
$produto ="TV SAMSUMG 4K";
$preco = 7000;

$stmt ->bindParam(":PRODUTO",$produto);
$stmt ->bindParam(":PRECO",$preco);
$stmt ->bindParam(":IDPRODUTO",$id);

$stmt->execute();

echo "Dados alterados com sucesso";

?>