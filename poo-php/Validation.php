<?php

declare(strict_types=1);

interface Validation
{
    public function validarNome(string $nome): void;
    public function validarDocumento(string $documento): void;
    public function validarCodigoPostal(string $codigoPostal): void;
}