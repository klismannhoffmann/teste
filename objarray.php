<?php

// cria array dados_william
$dados_william['nome'] ='William Santos';
$dados_william['idade'] = 20;
$dados_william['profissão'] ='Programador';


// cria array dados_rafaela
$dados_rafaela['nome'] = 'Rafaela Santos';
$dados_rafaela['idade'] = 24;
$dados_rafaela['profissão'] = 'Policial Militar';

$william= new stdclass();
// cria objeto william
foreach ($william as $chave => $valor)
{
	// utiliza variáveis variantes
	$william->$chave = $valor;
}

$rafaela= new stdclass();

// cria objeto rafaela
foreach ($rafaela as $chave=> $valor)
{
	// utiliza variáveis variantes
	$rafaela->$chave = $valor;
}
echo "{$william->nome} é {$william->profissao}\n";
echo "{$rafaela->nome} é {$rafaela->profissao}\n";
?>