<?php

class Documento{
    private $numero;
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($n){
        $this->numero=$n;
    }
}
class CPF extends Documento{
    public function validar():string{
        $numeroCPF = $this->getNumero();
        //Validacao CPF
        if(strlen($numeroCPF) == 11)
        return 'true';
        else
        return 'false';
    }
}

class CNPJ extends Documento{
    public function validar():string{
        $numeroCNPJ = $this-> getNumero();
        if (strlen($numeroCNPJ) == 14)
        return 'true';
        else
        return 'false';
    }
}

$doc = new CPF();
$doc->setNumero("05603533242");
echo $doc->getNumero();
echo "<br/>";
echo 'CPF valido? ->' .$doc->validar();
echo "<br/>";
echo "<br/>";

$doc2 = new CNPJ();
$doc -> setNumero("6377326500014");
echo "<br/>";
echo $doc2->getNumero();
echo "<br/>";
echo 'CNPJ é valido? ->' .$doc2 -> validar();

?>