<?php

declare(strict_types=1);

class GestorGeral extends Gestor
{
    private float $bonusAnual;

    public function obterBonusAnual(): float
    {
        return $this->bonusAnual;
    }

    public function definirBonusAnual(float $bonusAnual): void
    {
        $this->bonusAnual = $bonusAnual;
    }
}