<?php

declare(strict_types=1);

class Produto
{
    private string $nome;
    private float $valor;

    public function obterNome(): string
    {
        return $this->nome;
    }

    public function definirNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function definirValor(float $valor): void
    {
        if ($valor < 0) {
           throw new Exception('Ops, valor não pode ser negativo.');
        }
        $this->valor = $valor;
    }
}