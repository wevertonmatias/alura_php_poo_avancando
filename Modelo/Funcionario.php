<?php

namespace Modelo;

Class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, string $cargo, Cpf $cpf)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
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
    
}