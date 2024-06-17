<?php

	class Myclass	// É como a planta baixa para a contrução de uma ou várias casas (objetos)
	{
		//As propriedades e métodos da classe ficam aqui
		public $prop1 = "Sou uma propriedade de classe!";	//Valor de uma propriedade da classe que é basicamente uma variável php que só existe dentro da classe e só pode ser acessada através de um objeto
	
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
	
	$obj = new Myclass;	//Criou-se uma variável que instancia a classe, ou seja que pega os atributos e métodos da classe, ou seja de novo, criou-se um objeto a partir da classe
	
	//var_dump($obj);	//Exibe tudo o que esta dentro da classe
	
	//echo $obj -> prop1; // Mostra o conteúdo da propriedade
	
	echo $obj -> getProperty(); //Lê o valor da propriedade
	
	$obj -> setProperty("Sou um novo valor da propriedade!");
	
	echo $obj -> getProperty(); //Lê o valor novamente para mostrar a mudança
	
	
	$obj2 = new Myclass;	//Você pode criar multiplas instâncias para uma mesma classe, ou seja vários objetos parecidos mas que fazem coisas diferentes a partir de uma classe padrão
	
	echo $obj2 -> getProperty();
	
	$obj2 -> setProperty("Pertenço à segunda instância");
	
	echo $obj2 -> getProperty();

?>