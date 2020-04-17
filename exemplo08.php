<?php

interface Veiculo{
    ##Métodos que deverão ser implementados
    public function acelerar ($velocidade);
    public function frenar ($velocidade);
    public function trocarMarcha ($velocidade);

}

/*1° SITUACAO
class civic implements Veiculo{

}

$carro = new Civic();
*/

//2°SITUACAO

class Civic implements Veiculo{
    public function acelerar ($velocidade){
        echo "O veiculo acelerou ate ".$velocidade. "m/h";}
    public function frenar ($v){
        echo "O veiculo frenou ate ".$v. "km/h";
    }
    public function trocarMarcha($marcha){
        echo "O veiculo engatou a marcha ".$marcha;
    }
}
$carro = new Civic();
$carro -> trocarMarcha(4);
?>