<?php
class Produto
{
	//Propriedades [CARACTERISTICAS]
	var $codigo;
	var $descricao;
	var $preco;
	var $quantidade;
	
	//Métodos [FUNCOES]
	function imprimeEtiqueta()
	{
		print 'Código: ' . $this->codigo . "\n";
		print 'Descrição: ' . $this->descricao . "\n";
	}
	
}
?>