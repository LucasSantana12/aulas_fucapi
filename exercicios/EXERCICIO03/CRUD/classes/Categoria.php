<?php

require_once('Sql.php');

class Produto{
	//ORM
    private $idCategoria;
    private $categoria;
	

	public function getIdcategoria(){
		return $this->idCategoria;
	}

	public function getcategoria(){
		return $this->produto;
	}

    public function setIdcategoria($idCategoria){
		$this->idCategoria = $idCategoria;
	}
	
	public function setcategoria($categoria){
		$this->categoria = $categoria;
	}
	


	public function loadById($idCategoria){
		$sql = new Sql();

		$results = $sql->select("
					SELECT * FROM categorias 
					WHERE idCategoria=:IDCATEGORIA"
					,[":IDCATEGORIA"=>$idCategoria]);

		//return $results;
		if(isset($results[0])){//caso retorne uma linha
			$row = $results[0];

			$this->idCategoria($row['idCategoria']);
			$this->categoria($row['categoria']);

			return true;
		}

		return false;
	}

	public function __toString(){

		$arr = [
			
            "idCategoria"=> $this->getIdCategoria(),
			"categoria" => $this->getcategoria()
            
		];

        return "idCategoria: $arr[idCategoria]<br>".
            "nome: $arr[categoria]";
	}

	public static function getList(){
		$sql = new Sql();

		$arr = $sql->select("SELECT * from categoria");
		return $arr;
    }
    
	public function setData($categoria){

		$this->setcategoria($categoria);
		
	}

	public function insert(){
		$sql = new Sql();

		$sql->query("INSERT INTO categorias(categoria)
				VALUES(:categoria)

			",[
				"categoria"=>$this->getcategoria(),
				
			]);

	}

	public function update(){

		$sql = new Sql();

		$sql->query("UPDATE categorias 
			SET categoria =:categoria WHERE idCategoria = :idCategoria",
		[
			":categoria" => $this->getcategoria(),
			":idCategoria"=> $this->getIdCategoria()
		]);
	}
/*
	public static function search($produto){
		$sql = new Sql();
		$arr = $sql->select("	SELECT * FROM produtos 
						WHERE produto LIKE :string ORDER BY produto ",

			[
				":string" => "%".$produto."%"
			]
		);

		if(isset($arr[0])){//se a pesquisa retornou um valor
			$aux = $arr[0];

			$pr = new Produto();
			$pr->setIdproduto($aux['idProduto']);
			$pr->setProduto($aux['produto']);
			$pr->setPreco($aux['preco']);
			$pr->setIdcategoria($aux['idCategoria']);
			return $pr;

		}else{
			return null;
		}
	}
*/
	public function delete(){

		$sql = new Sql();

        $sql->query(
        "UPDATE produtos
        SET idCategoria = NULL
        WHERE idCategoria =:idCategoria",[":idCategoria"=>$this->getIdCategoria()
		]);

		$sql->query("DELETE FROM categorias WHERE idCategoria=:idCategoria",[
			":idCategoria"=>$this->getIdCategoria()
		]);
	}



}



?>