<?php

namespace Alura\Banco\Modelo;

Class Funcionario extends Pessoa
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
        return $this->salario * 0.1;
    }
    
}