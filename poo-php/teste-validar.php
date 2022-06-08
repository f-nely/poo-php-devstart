<?php

include 'Validar.php';

$cpf = '123456789';

try {
    Validar::validarCpf($cpf);
} catch (Exception $e) {
    echo $e->getMessage();
}

