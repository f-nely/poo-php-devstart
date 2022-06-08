<?php

include 'Usuario.php';
include 'Gestor.php';
include 'GestorGeral.php';

$gestorGeral = new GestorGeral('diana@email.com', '1q2w3e', 9000);

var_dump($gestorGeral);