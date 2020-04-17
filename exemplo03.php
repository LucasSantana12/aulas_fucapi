<?php
class Endereco{

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($log,$num,$cid){
        $this->logradouro = $log;
        $this->numero = $num;
        $this->cidade = $cid;
    }

    public function __toString(){
        return $this->logradouro." , ".
        $this->numero." , ".    
        $this->cidade;
    }
    public function __destruct(){
        echo "DESTRUCTION";
        //destruir a classe
    }
}

//Chamando o __construct()
//Complete com o seu endereco
$meuEndereco = new Endereco ("Rua Isaura esperança","13","Manaus");

//Imprimindo atraves do __toString
echo $meuEndereco;
echo '<br/><br/>';

//Chamando o __descruct
unset($meuEndereco);

?>