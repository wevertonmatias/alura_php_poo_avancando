<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\AcessoPropriedade;

/**
 * class Desenvolvedor
 * @property-read string $nome
 */
class Desenvolvedor extends Funcionario
{

    use AcessoPropriedade;
    public function sobeDeNivel()
    {
        $this->receberAumento($this->recuperaSalario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return 500.0;
    }
}