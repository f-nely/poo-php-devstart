<?php

declare(strict_types=1);

class Cliente extends Usuario
{
    private string $dataCadastro;

    public function obterDataCadastro(): string
    {
        return $this->dataCadastro;
    }
}