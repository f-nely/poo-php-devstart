<?php

// ini_set('display_errors', 1);

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$aluno1 = new Aluno();
$aluno1->nome = 'Alessandro';
$aluno1->cpf = '123.456.789-00';

$aluno1->nome .= ' Feitoza';

var_dump($aluno1);

echo "<h1>Aluno: {$aluno1->nome}</h1>";

$curso1 = new Curso();
$curso1->nome = 'Introdução ao PHP';
$curso1->cargaHoraria = 88;
$curso1->descricao = 'Aprender o básico e intermediário do PHP';

var_dump($curso1);

$prof = new Professor();
$prof->nome = 'Vinicius Dias';
$prof->cpf = '123.456.789.90';
$prof->salario = 1000;

var_dump($prof);