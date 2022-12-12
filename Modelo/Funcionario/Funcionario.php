<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;


abstract Class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, string $cargo, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function recuperarCargo():string
    {
        return $this->cargo;
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

    public function calculaBonificacao(): float
    {
        if($this->cargo == 'Gerente'){
            return $this->salario;
        }
        return $this->salario * 0.1;
    }

    public function receberAumento(float $valorAumento): void
    {
        if($valorAumento < 0){
            echo 'Valor deve ser maior que zero';
            return;
        }
        $this->salario += $valorAumento;
    }
    
}