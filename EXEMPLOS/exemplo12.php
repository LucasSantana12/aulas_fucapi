<?php
try {
    $conector = new PDO('mysql:dbname=aulas_bd;host=127.0.0.1','root','');

    $stmt = $conector-> prepare('SELECT FROM * carrinhos');

    if($stmt -> execute()){
        echo "CONEXÃO REALIZADA";
    }
    else {
        throw new Exception("o stmt não foi executado", 5000);
        
    }

    

} catch (Exception $e) {
    
/*
    echo $e->getMessage."<br>";
    echo $e->getFile."<br>";
    echo $e->getCode."<br>";
*/

    if($e->getCode()==2002){
    echo "<h1> ERRO NA CONEXÃO COM O BD </h1>";   
    }elseif($e->getCode()==1049){
        echo $e->getMessage().'<br>';
    }elseif($e->getCode()== 1146){
        echo $e->getMessage().'<br>';
    }
}finally{
    echo "SEMPRE EXECUTADO";
}

?>