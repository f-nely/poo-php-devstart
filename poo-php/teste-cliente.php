<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';

$cliente = new Cliente();
$cliente->definirNome('Taylor');

$gestor = new Gestor();
$gestor->definirNome('Anne');

var_dump($cliente, $gestor);