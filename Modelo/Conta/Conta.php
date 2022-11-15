<?php

namespace Alura\Banco\Modelo\Conta;

class Conta
{
    private float $saldo = 0;
    private Titular $titular;
    private static $numeroDeContas;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }


    public function sacar($valor)
    {
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

    public function mostrarNomeTitular(): string
    {
        return $this->titular->mostrarNometitular();
    }

    public function mostrarCpfTitular(): Cpf
    {
        return $this->titular->mostrarCpfTitular();
    }

    public static function numeroDeContas(): int
    {
        return self::$numeroDeContas . PHP_EOL;
    }
}