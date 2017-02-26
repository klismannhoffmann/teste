<?php
class Pessoa
{
	var $codigo;
	var $nome;
	var $altura;
	var $idade;
	var $nascimento;
	var $escolaridade;
	var $salario;
	
	/***
	 * método crescer
	 * aumenta a altura em centímetros
	 */
	function crescer($centimetros)
	{
		if ($centimetros > 0)
		{
			$this->altura += $centimetros;
		}
	}
	
	/***
	 * método estudar
	 * altera a escolaridade para $titulacao
	 */
	function formar($titulacao)
	{
		$this->escolaridade = $titulacao;
	}
	
	/***
	 * método envelhecer
	 * aumenta a idade em $anos
	 */
	function envelhecer($anos)
	{
		if ($anos > 0)
		{
			$this->idade += $anos;
		}
	}
	function __construct($codigo, $nome, $altura, $idade, $nascimento, $escolaridade,
			$salario)
	{
		$this->codigo = $codigo;
		$this->nome = $nome;
		$this->altura = $altura;
		$this->idade = $idade;
		$this->nascimento = $nascimento;
		$this->escolaridade = $escolaridade;
		$this->salario = $salario;
	}

	function __destruct()
	{
		echo "Objeto {$this->nome} finalizado...\n ";
	
	}
}




?>