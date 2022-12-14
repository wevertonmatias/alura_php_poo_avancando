<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;


abstract Class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alterarNome(string $nome): void
    {
        $this->validarNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function receberAumento(float $valorAumento): void
    {
        if($valorAumento < 0){
            echo 'Valor deve ser maior que zero';
            return;
        }
        $this->salario += $valorAumento;
    }
     abstract public function calculaBonificacao(): float;
    
}