<?php

declare(strict_types=1);

class ValidarBR implements Validation
{
    public function validarNome(string $nome): void
    {
        
    }

    public function validarDocumento(string $documento): void
    {
        if (strlen($documento) !== 11) {
            throw new Exception('CPF inválido');
        }
    }

    public function validarCodigoPostal(string $codigoPostal): void
    {

    }
}