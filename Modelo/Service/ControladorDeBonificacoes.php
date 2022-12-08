<?php

namespace Alura\Banco\Modelo\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalBonificacoes = 0;

    public function adicionaBonificacaoDe( Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function totalBonificacoa(): float
    {
        return $this->totalBonificacoes;
    }
}