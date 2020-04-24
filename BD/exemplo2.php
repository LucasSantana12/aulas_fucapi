<?php
$conn = new PDO('mysql:dbname=prova;host=127.0.0.1','root','');

$stmt = $conn -> prepare("

    INSERT INTO produtos(produto,preco,idCategoria)
    VALUES(:PRODUTO,:PRECO,:ID_CAT)
    
");

$produto = "Iphone";
$preco= 5000;
$id_cat = 3;

$stmt -> bindParam(":PRODUTO",$produto);
$stmt ->bindParam(":PRECO",$preco);
$stmt ->bindParam(":ID_CAT",$id_cat);

$stmt -> execute();

echo "Inserido com sucesso";


?>