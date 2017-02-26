
<?php
class ContaCorrente extends ContaBancaria
{
var $limite;
/***
* método construtor (sobrescrito)
* agora, também inicializa a variável $limite
*/
function construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo,
$limite)
{
// chamada do método construtor da classe-pai.
parent:: __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
$this->limite = $limite;
}
/***
* método retirar (sobrescrito)
* verifica se a $quantia retirada está dentro do limite.
*/
function retirar($quantia)
{
// imposto sobre movimentação financeira
$cpmf = 0.05;
if ( ($this->saldo + $this->limite) >= $quantia )
{
// Executa método da classe-pai.
parent::retirar($quantia);
// Debita o Imposto
parent::retirar($quantia * $cpmf);
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