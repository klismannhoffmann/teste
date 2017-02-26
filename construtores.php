<?php
# carrega as classes
include_once 'pessoa.php';
include_once 'contaBancaria.php';

# criação do objeto $carlos
$carlos = new Pessoa(10,'Carlos da Silva',1.85, 25,'10/04/1976','Ensino Médio',650);

echo "Manipulando o objeto {$carlos->nome}: \n";
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n";

$carlos->formar('Técnico em Eletricidade');

echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n";
echo "{$carlos->nome} possui {$carlos->idade} anos \n";

$carlos->envelhecer(1);

echo "{$carlos->nome} possui {$carlos->idade} anos \n";

# Criação do objeto $conta_carlos
$conta_carlos = new ContaBancaria(6677, 'CC.1234.56', '10/07/02', $carlos, 9876, '567.89');
echo "\n";

$titular = $conta_carlos->titular->nome ;
echo "Manipulando a conta de: $titular : \n";

$saldo = $conta_carlos->obterSaldo(); 
echo "0 saldo atual é R\$ $saldo \n";
$conta_carlos->depositar(20);

$saldo = $conta_carlos->obterSaldo();
echo "0 saldo atual é R\$ $saldo \n";

$conta_carlos->retirar(10);

$saldo = $conta_carlos->obterSaldo();
echo "0 saldo atual é R\$ $saldo \n";
