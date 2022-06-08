<?php

include 'Validation.php';
include 'ValidarBR.php';

$br = new ValidarBR();

try {
    $br->validarDocumento('123123123');
} catch (Exception $e) {
   echo $e->getMessage();
}
