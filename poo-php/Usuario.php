<?php

declare(strict_types=1);

class Usuario
{
    private string $nome;
    private string $email;
    private string $senha;
    private string $cpf;

    public function obterNome(): string
    {
        return $this->nome;
    }

    public function definirNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function obterEmail(): string
    {
        return $this->email;
    }

    public function definirEmail(string $email): void
    {
        $this->email = $email;
    }

    public function obterCpf(): string
    {
        return $this->cpf;
    }

    public function definirCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
}