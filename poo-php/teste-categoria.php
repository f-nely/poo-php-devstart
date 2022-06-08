<?php

include 'Categoria.php';

$categoria1 = new Categoria('Roupas', 'Roupas Unissex');
$categoria2 = new Categoria('Roupas de banho', 'Toalhas, toalhas para o rosto, etc.');
$categoria3 = new Categoria('Calçados', 'Calçados em geral');

var_dump($categoria1, $categoria2, $categoria3);