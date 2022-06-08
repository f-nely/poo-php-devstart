<?php

declare(strict_types=1);

include 'Categoria.php';

class Produto
{
    private string $nome;
    private float $valor;
    private string $descricao;
    private readonly Categoria $categoria; // readonly somente PHP 8.1

    public function __construct(string $nome, float $valor, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->categoria = $categoria;
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