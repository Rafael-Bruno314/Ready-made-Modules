<?php
	class funcionarios
	{
		private $func = array(
			"Nome" => "",
			"Idade" => 0,
			"Salário" => 0.0,
			"Situação" => false
		);
		
		private $bonif = 1.10;
		
		public function __construct($nome,$idade,$salario,$situacao)
		{
			$this -> func['Nome'] = $nome;
			$this -> func['Idade'] = $idade;
			$this -> func['Salário'] = $salario;
			$this -> func['Situação'] = $situacao;
			
			if($situacao == true)
			{
				$this -> func['Salário'] *= $this -> bonif;
			}				
		}
		
		public function getFuncionario()
		{
			foreach($this -> func as $chave => $item)	
			{
				echo "{$chave}: {$item} <br>";
			}
		}
		
		public function Traco()
		{
			echo "<hr>";
		}
		
	}
?>