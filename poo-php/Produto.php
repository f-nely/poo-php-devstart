<?php

declare(strict_types=1);

class Produto
{
    private string $nome;
    private float $valor;
    private string $descricao;

    public function __construct(string $nome, float $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->definirValor($valor);
    }

    public function obterNome(): string
    {
        return $this->nome;
    }

    public function definirNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function obterValor(): float
    {
        return $this->valor;
    }

    public function definirValor(float $valor): void
    {
        if ($valor < 0) {
           throw new Exception('Ops, valor não pode ser negativo.');
        }
        $this->valor = $valor;
    }

    public function obterDescricao(): string
    {
        return $this->descricao;
    }

    public function definirDescricao(string $descricao): void
    {
        $this->descricao = $descricao;
    }
}