<?php


Class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, string $cargo, Cpf $cpf)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->cpf = $cpf;
    }

    public function recuperarCargo():string
    {
        return $this->cargo;
    }
    
}