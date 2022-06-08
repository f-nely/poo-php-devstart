<?php

include 'Produto.php';

$categoria1 = new Categoria('Roupas', 'Roupas Unissex');
$categoria2 = new Categoria('Roupas de banho', 'Toalhas, toalhas para o rosto, etc.');
$categoria3 = new Categoria('Calçados', 'Calçados em geral');

$produto1 = new Produto('Tênis para corrida', 299, $categoria3);

$produto2 = new Produto('Calça Jeans', 100, $categoria1);

try {
    $produto2->definirValor(-120);
} catch (Exception $e) {
    echo $e->getMessage();
}

$produto3 = new Produto('Bermuda', 150, $categoria1);

var_dump($produto1, $produto2, $produto3);