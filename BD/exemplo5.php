<?php
//transação
$erro=0;
$conn = new PDO('mysql:dbname=prova;host=127.0.0.1','root','');
    
$conn->beginTransaction();

$stmt1= $conn-> prepare("
    DELETE FROM detpedidos WHERE iddetpedido=:iddetpedido
    ");

    $iddetpedidos=1;
    $stmt1->bindParam(":iddetpedido",$iddetpedido);
    $stmt1->execute();

    $stmt2= $conn-> prepare("
    DELETE FROM detpedidos WHERE iddetpedido=:iddetpedido
    ");

    $iddetpedidos=17;
    $stmt2->bindParam(":iddetpedido",$iddetpedido);
    $stmt2->execute();

    if($erro==1){
        $conn->rollBack();
    }else {
        $conn->commit();
        echo "sera?";
    }

    $stmt3=$conn->prepare("
    DELETE FROM detpedidos WHERE iddetpedido=:iddetpedido
    ");

    $iddetpedidos=4;
    $stmt3->bindParam(":iddetpedido",$iddetpedido);
    $stmt3->execute();

    echo "AGORA FOI"
?>