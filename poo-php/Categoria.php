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
    
    // private string $nome;
    // private string $descricao;

    // public function __construct(string $nome, string $descricao)
    // {
    //     $this->nome = $nome;
    //     $this->descricao = $descricao;
    // }
}