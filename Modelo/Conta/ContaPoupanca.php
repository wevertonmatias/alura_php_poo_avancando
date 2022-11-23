<?php

namespace Alura\Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function sacar( float $valor): void
    {
        $tarifa = $valor * 0.3;
        $valor += $tarifa;
        if($this->saldo < $valor) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valor;
    }
}