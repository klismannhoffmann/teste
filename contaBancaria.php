<?php
abstract class ContaBancaria
{
	var $agencia;
	var $codigo;
	var $dataDeCriacao;
	var $titular;
	var $senha;
	var $saldo = 0;
	
	/***
	 * método retirar
	 * diminui o saldo em $quantia
	 */
	function retirar($quantia)
	{
		if ($quantia > 0)
		{
			$this->saldo -= $quantia;
		}
	}
	
	/***
	 * método depositar
	 * aumenta o saldo em $quantia
	 */
	function depositar($quantia)
	{
		if ($quantia > 0)
		{
			$this->saldo += $quantia;
		}
	}
	
	/***
	 * método obterSaldo
	 * retorna o saldo atual
	 */
	function obterSaldo()
	{
		return $this->saldo;
	}
	
	function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo)
	{
		$this->agencia = $agencia;
		$this->codigo = $codigo;
		$this->dataDeCriacao = $dataDeCriacao;
		$this->titular = $titular;
		$this->senha = $senha;
		// chamada a outro método da classe
		$this->depositar($saldo);
	}
	/***
	 * método destrutor
	 * finaliza objeto
	 */
	function __destruct()
	{
		echo "Objeto Conta {$this->codigo} de {$this->titular->nome} finalizada...\n";
	}
	}
	?>

