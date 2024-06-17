<?php
	
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
	
	class MyOtherClass extends Myclass	//Herança de classe, seria uma extenção da classe pai (Myclass) ou seja ela já tem em si todos os metodos e propriedades da classe pai
	{
		public function __construct()	//Você pode sobrescrever métodos e propriedades se apenas declará-los com o mesmo nome na classe herdeira
		{
			parent:: __construct();	//Ao usar a palavra parent com o operador de resolução de escopo (::) você pode acionar o método original (construct da classe pai) enquanto o sobrescreve ou já tendo o sobrescrito (e depois usa o constructor dessa classe herdeira)
			echo "Um novo construtor em ".__CLASS__.".<br/>";
		}
		
		public function newMethod()
		{
			echo "De um novo método na classe ".__CLASS__.".<br/>";
		}
	}
	
	//$newobj = new MyOtherClass;		//Vai executar o método __construct da classe pai
	
	//$newobj = new MyOtherClass;		//Vai executar o método __construct da classe herdeira pois ela sobrescreveu o da classe pai
	
	$newobj = new MyOtherClass;		//Vai executar o método __construct da classe herdeira pois ela sobrescreveu o da classe pai e o da classe pai porque ela foi acionada pelo "parent::"
	
	echo $newobj -> newMethod();	//Vai executar o método da classe herdeira que é uma extenção da classe pai
	
	echo $newobj -> getProperty()	//Vai executar o método da classe pai
	
	//Ao fim do arquivo vai executar a __destruct da classe pai
	
?>