<?php

declare(strict_types=1);

abstract class Usuario
{
    private string $nome;
    private string $email;
    private string $senha;
    private string $cpf;

    public function __construct(string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

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

    public function obterSenha(): string
    {
        return $this->senha;
    }

    public function definirSenha(string $senha): void
    {
        $this->senha = $senha;
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