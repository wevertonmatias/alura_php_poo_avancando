<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{

    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transferir($contaDestino, $valor)
    {
        if($this->saldo < $valor){
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valor;
        $contaDestino->depositar($valor);
    }
}