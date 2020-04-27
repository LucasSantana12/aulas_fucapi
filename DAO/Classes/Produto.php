<?php

require_once(Sql.php);

class produto{
    private $idProduto;
    private $produto;
    private $preco;
    private $idCadegoria;

    public function getIdproduto(){
        return $this->idProduto;
    }

    public function getproduto(){
        return $this->produto;
    }

    public function getpreco(){
        return $this->preco;
    }

    public function getidCadegoria(){
        return $this->idCadegoria;
    }


    public function setpreco($preco){
        $this->preco = $preco;
    }

    public function setproduto($produto){
        $this->produto = $produto;
    }

    public function setidCadegoria($idCadegoria){
        $this->idCadegoria= $idCadegoria;
    }

    public function setIdproduto($idProduto){
        $this->idProduto = $idProduto;
    }

    public function loadById($idProduto){
        $sql = new sql();

        $sql_>select("SELECT * FROM produtos
         WHERE idProdutos=:IDPRODUTO",
        [":IDPRODUTOS"=>$idProduto]);

        if(!isset($results[0])){
            $row = $results[0];

            $this->setidCadegoria($row['idCadegoria']);
            $this->setIdproduto($row['idProduto']);
            $this->setpreco($row['preco']);
            $this->setproduto($row['produto']);

            return true;
    }
return false;
}

public function _toString(){
    $arr=[
       "idCadegoria" => $this->setidCadegoria(),
       "idProduto" =>  $this->setIdproduto(),
       "preco" =>  $this->setpreco(),
       "produto" =>  $this->setproduto()
    ];

    return json_encode($arr);
}
}

?>
