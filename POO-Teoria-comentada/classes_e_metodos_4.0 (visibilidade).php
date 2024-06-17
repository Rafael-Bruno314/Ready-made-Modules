<?php
	class Myclass	// É como a planta baixa para a contrução de uma ou várias casas (objetos)
	{
		//As propriedades e métodos da classe ficam aqui
		public $prop1 = "Sou uma propriedade de classe!";	//Valor de uma propriedade da classe que é basicamente uma variável php que só existe dentro da classe e só pode ser acessada através de um objeto
		
		public static $count = 0;
		
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
		protected function getProperty () //Ao declarar ela como protected ela só pode ser acessada pela classe em si e por suas herdeiras
		{
			return $this -> prop1."<br/>";
		}
		
		private function getProperty_private () //Ao declarar ela como private ela só pode ser acessada apenas pela própria classe
		{
			return $this -> prop1."<br/>";
		}
		
		public static function plusOne()
		{
			return "O valor é ". ++self::$count.".<br/>";	//Esse self é equivalente ao $this só que para 'static' e esse ++ está adicionando +1 à variável 
		}
		
	}
	
	class MyOtherClass extends Myclass	//Herança de classe, seria uma extenção da classe pai (Myclass) ou seja ela já tem em si todos os metodos e propriedades da classe pai
	{
		public function __construct()	//Você pode sobrescrever métodos e propriedades apenas declará-los com o mesmo nome na classe herdeira
		{
			parent:: __construct();	//Ao usar a palavra parent com o operador de resolução de escopo (::) você pode acionar o método original enquanto o sobrescreve ou já tendo o sobrescrito
			echo "Um novo construtor em ".__CLASS__.".<br/>";
		}
		
		public function newMethod()
		{
			echo "De um novo método na classe ".__CLASS__.".<br/>";
		}
		
		public function callProtected()
		{
			return $this -> getProperty();
		}
		
		public function callProtected_private()
		{
			return $this -> getProperty_private();	//Esse método não terá acesso pois aquele método é privado
		}
	}
	
	class SimpleClass	//Uma classe contendo um DocBlock
	{
		/**
		 * A classe simples
		 */
	}
	
	$newobj = new MyOtherClass;
	
	//echo $newobj -> getProperty();	//Nesse caso irá apresentar um erro pois um método protegido não pode ser acessado através de um objeto de uma classe descendente
	
	echo $newobj -> callProtected();	//Nesse caso o método protegido é lido na classe herdada (que tem permissão para ler) e mostrado através de um método público, então dará certo
	
	//echo $newobj -> callProtected_private();	//O código irá apresentar um erro pois está sendo pedido que seja mostrado um método privado que a classe herdeira não tem permissão de acessar
	
	echo "<br>";
	
	do
	{
		//invoca o método plusOne sem instanciar a classe MyClass (sem precisar criar um objeto)
		echo $newobj -> plusOne(); //Feito por instanciamento de classe (usando um objeto)
	}while( MyClass::$count < 10); //Feito sem precisar criar um objeto (Dá no mesmo).
	
?>