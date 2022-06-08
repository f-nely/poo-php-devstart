<?php

declare(strict_types=1);

class Gestor extends Usuario
{
    private float $salario;
    private string $horario;

    public function __construct(string $email, string $senha, float $salario)
    {
        parent::definirEmail($email);
        parent::definirSenha($senha);
        $this->salario = $salario;
    }

    public function obterSalario(): float
    {
        return $this->salario;
    }

    public function definirSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function obterHorario(): string
    {
        return $this->horario;
    }

    public function definirHorario(float $horario): void
    {
        $this->horario = $horario;
    }
}