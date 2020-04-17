<?php
class Pessoa{
    public $nome = "Lucas Santana";
    protected $idade = 20;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "br/>";
    }
}

/* 1° situação
class Programador extends Pessoa{
}
$objeto = new Programador();
$objeto->verDados();
*/
//2° situação

class Programador extends Pessoa{
    public function verDados(){

        echo get_class($this)."<br/>";
        echo $this->nome."<br/>";
        echo $this->idade."<br/>";
        echo $this->senha."<br/>";
    }
}

$objeto = new Programador();
$objeto->verDados();
?>