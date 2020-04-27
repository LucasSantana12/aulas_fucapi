<?php

class Sql extends PDO{
	private $conn;

	public function __construct(){
		$this->conn = new PDO('mysql:dbname=prova;host=127.0.0.1','root','');
	}
	 public function query($comando,$parametro=array() ){
		 $stml = $this->conn->prepare($comando);

		foreach ($parametros as $chave => $valor) {
			$stmt->bindParam($chave,$valor);
		}

		$stmt->execute();
		return $stmt;
	}

	public function select($comando,$parametros=array() ){
	$stmt = $this->query($comando,$parametros);
	$results = $stmt->fetchAll(PDO::FETCHASSOC);
	return $results;


	}
}

?>