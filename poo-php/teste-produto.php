<?php

include 'Produto.php';

$produto1 = new Produto();
$produto1->definirNome('Tênis para corrida');
$produto1->definirValor(299);

$produto2 = new Produto();
$produto2->definirNome('Calça Jeans');

try {
    $produto2->definirValor(-100);
} catch (Exception $e) {
    echo $e->getMessage();
}


var_dump($produto1, $produto2);