
<?php
class ContaCorrente extends ContaBancaria
{
var $limite;
/***
* m�todo construtor (sobrescrito)
* agora, tamb�m inicializa a vari�vel $limite
*/
function construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo,
$limite)
{
// chamada do m�todo construtor da classe-pai.
parent:: __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo);
$this->limite = $limite;
}
/***
* m�todo retirar (sobrescrito)
* verifica se a $quantia retirada est� dentro do limite.
*/
function retirar($quantia)
{
// imposto sobre movimenta��o financeira
$cpmf = 0.05;
if ( ($this->saldo + $this->limite) >= $quantia )
{
// Executa m�todo da classe-pai.
parent::retirar($quantia);
// Debita o Imposto
parent::retirar($quantia * $cpmf);
// retirada permitida
return true;
}
else
{
echo "Retirada n�o permitida...\n";
return false;
}
}
}
?>