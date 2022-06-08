<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';

$cliente = new Cliente('taylor@email.com', '3030fa');
$cliente->definirNome('Taylor');

$gestor = new Gestor('anne@email.com', '1990as');
$gestor->definirNome('Anne');

var_dump($cliente, $gestor);