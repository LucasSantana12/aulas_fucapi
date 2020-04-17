<?php
//POLIMORFISMO

abstract class Animal{

	public function falar(){

		return "Falando...";
	}

	public function mover(){
		return "Andando...";
	}

}

class Cachorro extends Animal{
	public function falar(){
		return "Latindo...";
	}
}

class Gato extends Animal{
	public function falar(){
		return "Miando...";

	}

}

class Passarinho extends Animal{
    public function falar(){
        return "Cantando..";
    }
    public function mover(){
        return "Voando e ".parent::mover();
    }
}



$bethoven = new Cachorro;
echo $bethoven->falar().'<br/>';// tem polimorfismo
echo $bethoven->mover().'<br/>';// ñ tem...

echo '-----------------'.'<br/>';

$bichano = new Gato;
echo $bichano->falar().'<br/>';
echo $bichano->mover().'<br/>';


echo '-----------------'.'<br/>';

$piriquito = new Passarinho;
echo $piriquito-> falar().'<br/>';
echo $piriquito -> mover().'<br/>';


?>