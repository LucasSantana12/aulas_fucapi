<?php

require_once('Sql.php');

class Cliente{
	//ORM
	private $idCliente;
	private $cliente;
	private $cpf;
    private $email;
    
    private $senha;
    private $cidade;
    private $estado;
    private $celular;

	public function getidCliente(){
		return $this->idCliente;
	}

	public function getnome(){
		return $this->nome;
	}

	public function getcpf(){
		return $this->cpf;
	}

	public function getemail(){
		return $this->email;
    }
    
    public function getsenha(){
		return $this->senha;
    }
    public function getcidade(){
		return $this->cidade;
    }
    
    public function getestado(){
		return $this->estado;
    }
    public function getcelular(){
		return $this->celular;
	}

	public function setidCliente($idCliente){
		$this->idCliente = $idCliente;
	}
	public function setnome($nome){
		$this->nome = $nome;
	}
	public function setcpf($cpf){
		$this->cpf = $cpf;
	}
	public function setemail($email){
		$this->email = $email;
    }

    public function setsenha($senha){
		$this->senha = $senha;
    }

    public function setcidade($cidade){
		$this-> cidade= $cidade;
	}
    public function setestado($estado){
		$this->estado = $estado;
    }

    public function setcelular($celular){
		$this->celular = $celular;
    }
    


	public function loadById($idCliente){
		$sql = new Sql();

		$results = $sql->select("
					SELECT * FROM clientes 
					WHERE idCliente=:idCliente"
					,[":idCliente"=>$idCliente]);

		//return $results;
		if(isset($results[0])){//caso retorne uma linha
			$row = $results[0];

			$this->setidCliente($row['idCliente']);
			$this->setnome($row['nome']);
			$this->setcpf($row['cpf']);
            $this->setemail($row['email']);
            $this->setsenha($row['senha']);
            $this->setcidade($row['cidade']);
            $this->setestado($row['estado']);
			$this->setcelular($row['celular']);
            
            
        
			return true;
		}

		return false;
	}

	public function __toString(){

		$arr = [
			"idCliente" => $this->getidCliente(),
			"nome" => $this->getnome(),
			"cpf" => $this->getcpf(),
            "email"=> $this->getemail(),
            "senha"=> $this->getsenha(),
            "cidade"=> $this->getcidade(),
            "estado"=> $this->getestado(),
			"celular"=> $this->getcelular()
            
            
            
		];

		return json_encode($arr);// converte array => json
	}

	public static function getList(){
		$sql = new Sql();

		$arr = $sql->select("SELECT * from clientes");
		return $arr;
	}
	public function setData($nome, $cpf, $email, $senha, $cidade, $estado, $celular){

        $this->setnome($nome);
        $this->setcpf($cpf);
        $this->setemail($email);
        $this->setsenha($senha);
        $this->setcidade($cidade);
        $this->setestado($estado);
        $this->setcelular($celular);
	
        
        
	}

	public function insert(){
		$sql = new Sql();
		
		$sql->query("INSERT INTO clientes(nome, cpf, email, senha, cidade, estado, celular)
				VALUES(:nome,:cpf,:email,:senha,:cidade,:estado,:celular)

			",[
				"nome"=>$this->getnome(),
				"cpf"=>$this->getcpf(),
                "email"=>$this->getemail(),
                "senha"=>$this->getsenha(),
				"cidade"=>$this->getcidade(),
                "estado"=>$this->getestado(),
                "celular"=>$this->getcelular()
			]);
			

	}

	public function update(){

		$sql = new Sql();

		
		$sql->query("UPDATE clientes 
			SET nome = :nome, cpf = :cpf, email = :email, senha = :senha, cidade = :cidade, estado = :estado, celular = :celular WHERE idCliente = :idCliente",
		[
			":nome" => $this->getnome(),
			":cpf" => $this->getcpf(),
			":email"=> $this->getemail(),
            ":senha"=>$this->getsenha(),
            ":cidade" => $this->getcidade(),
			":estado" => $this->getestado(),
			":celular"=> $this->getcelular(),
			":idCliente"=>$this->getIdCliente()
		]);
	}

	public static function search($nome){
		$sql = new Sql();
		$arr = $sql->select("	SELECT * FROM clientes 
						WHERE nome LIKE :string ORDER BY nome ",

			[
				":string" => "%".$nome."%"
			]
		);

		if(isset($arr[0])){
                $aux = $arr[0];

			$pr = new Cliente();
			$pr->setidCliente($aux['idCliente']);
			$pr->setnome($aux['nome']);
			$pr->setcpf($aux['cpf']);
            $pr->setemail($aux['email']);
            $pr->setsenha($aux['senha']);
			$pr->setcidade($aux['cidade']);
			$pr->setestado($aux['estado']);
			$pr->setcelular($aux['celular']);
			return $pr;

        }
        else{
			return null;
		}
	}
	public function delete(){

		$sql = new Sql();

        $sql->query(
			"UPDATE pedidos
			 SET idCliente=NULL 
			 where idCliente=:idCliente
			",[
				":idCliente"=>$this->getIdCliente()
			]);
	
			$sql->query("DELETE FROM clientes WHERE idCliente=:idCliente",[
				":idCliente"=>$this->getIdCliente()
			]);
	}
	
	
	}
	
	
?>