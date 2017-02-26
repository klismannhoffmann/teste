<?php
final class ContaPoupanca extends ContaBancaria
{
	var $aniversario;
	/***
	 * método construtor (sobrescrito)
	 * agora, também inicializa a variável $aniversario
	 */
	function __construct($agencia,$codigo,$dataDeCriacao,$titular,
			$senha,$saldo,$aniversario)
	{
		// chamada do método construtor da classe-pai.
		parent:: __construct($agencia,$codigo,$dataDeCriacao,$titular,$senha,$saldo);
		$this->aniversario = $aniversario;
	}
	/***
	 * método retirar (sobrescrito)
	 * verifica se há saldo para retirar tal $quantia.
	 */
	function retirar($quantia)
	{
		if ($this->saldo >= $quantia)
		{
			// Executa método da classe-pai.
			parent::retirar($quantia);
			// retirada permitida
			return true;
		}
		else
		{
			echo "Retirada não permitida...\n";
			return false;
		}
	}
}
?>