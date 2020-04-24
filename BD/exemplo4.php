<?php

$conn = new PDO('mysql:dbname=prova;host=127.0.0.1','root','');

$stmt = $conn -> prepare ("
    DELETE FROM produtos WHERE idProduto=:ID"
);

$id=21;

$stmt->bindParam(":ID",$id);
$stmt->execute();

echo "DELETADO CAMPEÃO";
?>