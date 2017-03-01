<?php
include_once 'cesta.php';
include_once 'produto.php';
$produtol = new Produto;
$produtol->codigo = 1;
$produtol->descricao = 'Ameixa';
$produtol->preco = 1.40;
$produto2 = new Produto;
$produto2->codigo = 2;
$produto2->descricao = 'Morango';
$produto2->preco = 2.24;
$produto3 = new Produto;
$produto3->codigo = 3;
$produto3->descricao = 'Abacaxi';
$produto3->preco = 2.86;
$produto4 = new Produto;
$produto4->codigo = 4;
$produto4->descricao = 'Laranja';
$produto4->preco = 1.14;
$cesta = new Cesta;
$cesta->AdicionaItem($produtol);
$cesta->AdicionaItem($produto2);
$cesta->AdicionaItem($produto3);
$cesta->AdicionaItem($produto4);
echo $cesta->CalculaTotal() , "\n";
echo $cesta->ExibeLista();
?>