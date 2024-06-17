<?php
	
	//O PHP oferece vários métodos mágicos que são métodos especiais que são chamados quando certas ações comuns ocorrem com objetos
	//Existem diversos métodos mágicos diferentes além do __construct, __destruct e __toString que podem ser consultados na internet
	
	class Myclass	// É como a planta baixa para a contrução de uma ou várias casas (objetos)
	{
		//As propriedades e métodos da classe ficam aqui
		public $prop1 = "Sou uma propriedade de classe!";	//Valor de uma propriedade da classe que é basicamente uma variável php que só existe dentro da classe e só pode ser acessada através de um objeto
		
		public function __construct()	//É um método mágico que é executado automaticamente quando um objeto é criado
		{
			echo 'A classe "', __CLASS__, '" foi instanciada! <br />';	//Ou seja um objeto foi criado e esse __CLASS__ é uma constante mágica que mostra o nome da classe
		}
		
		public function __destruct()	//É executada automaticamente quando um objeto é destruído pela função unset() ou quando o arquivo php acaba (obviamente) e libera todos os recursos
		{
			echo 'A classe "', __CLASS__, '" foi destruída! <br />';
		}
		
		public function __toString()
		{
			echo "Usando o método toString: ";
			return $this -> getProperty();	//Ao tentar tratar o objeto como uma string executará automaticamente o método toString que irá fazer uma chamada ao método getProperty também presente dentro dessa mesma classe
		}
		
		// Métodos são as ações particulares que os objetos serão capazes de executar, são as funções específicas das classes
		public function setProperty ($newval)
		{
			$this -> prop1 = $newval; //Usa-se $this para auto referenciar a classe da qual a propriedade faz parte juntamente com o método
		}
		public function getProperty ()
		{
			return $this -> prop1."<br/>";
		}
		
	}
	
	$obj = new Myclass;	//Automaticamente executará a function __construct;
	
	//echo $obj -> getProperty();
	
	echo $obj; //Tratou o objeto como string
	
	unset($obj); //Destói o objeto (e automaticamente executa o método __destruct
	
	echo "Fim do arquivo. <br />";
	
?>