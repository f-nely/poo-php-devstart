<?php

declare(strict_types=1);

class Categoria
{
    // construtor em PHP 8
    public function __construct(
        private string $nome,
        private string $descricao   
    ) {

    }

    public function obterNome(): string
    {
        return $this->nome;
    }

    public function definirNome(string $nome): void
    {
        $this->nome = $nome;
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