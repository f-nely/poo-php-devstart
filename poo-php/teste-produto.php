<?php

include 'Produto.php';

$produto1 = new Produto('Tênis para corrida', 299);
// $produto1->definirNome('Tênis para corrida');
// $produto1->definirValor(299);

$produto2 = new Produto('Calça Jeans', 100);
// $produto2->definirNome('Calça Jeans');

try {
    $produto2->definirValor(-120);
} catch (Exception $e) {
    echo $e->getMessage();
}

$produto3 = new Produto('Bermuda', 150);

var_dump($produto1, $produto2, $produto3);