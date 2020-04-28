<?php

class Pessoa{
    public $nome;

    public function falar(){
        return "o meu nome é : ".$this -> nome;
    }
}

//instanciar um objeto da classe pessoa
$pessoa1 = new Pessoa(); //Joao
$pessoa2 = new Pessoa(); //Maria

//atribuição de valores
$pessoa1-> $nome="Joao";
$pessoa2-> $nome="Maria";

//EXECUÇÃO
echo '<h1>'.$pessoa->falar().'</h1>';
echo '<h1>'.$pessoa->falar().'</h1>';
?>