
<?php
class Aplicacao
{
static $quantidade;
/* m�todo Construtor
* incrementa a $quantidade de Aplica��es
*/
function __construct($nome)
{
// incrementa propriedade est�tica
self::$quantidade ++;
$i = self::$quantidade ;
echo "Nova Aplica��o nr. $i: $nome\n";
}
}
# cria novos objetos
new Aplicacao('B�sico');
new Aplicacao('Profissional');
new Aplicacao('Negocios');
echo 'Quantidade de Aplica��es ='. Aplicacao::$quantidade . "\n";
?>
