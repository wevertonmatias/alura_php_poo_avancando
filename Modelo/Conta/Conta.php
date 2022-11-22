<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Titular;

class Conta
{
    private float $saldo = 0;
    private Titular $titular;
    private int $tipo;
    private static $numeroDeContas;


    public function __construct(Titular $titular, int $tipo)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
        /**
         * @var int $tipo 1 == Conta Corrente; 2 == Poupança
         */
        $this->tipo = $tipo;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }


    public function sacar($valor)
    {
        if($this->tipo === 1){
            $tarifa = $valor * 0.05;
        }else{
            $tarifa = $valor * 0.3;

        }
        $valor += $tarifa;
        if($this->saldo < $valor) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valor;
    }

    public function depositar($valor)
    {
        if($valor <= 0) {
            echo "Erro: valor negativo.";
            return;
        }
        $this->saldo += $valor;
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

    public function mostrarSaldo(): void
    {
        echo $this->saldo;
    }

    public static function numeroDeContas(): int
    {
        return self::$numeroDeContas . PHP_EOL;
    }
}