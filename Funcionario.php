<?php


Class Funcionario
{
    private string $nome;
    private string $cargo;
    private Cpf $cpf;

    public function __construct(string $nome, string $cargo, Cpf $cpf)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->cpf = $cpf;
    }

    public function recuperarNome():string
    {
        return $this->nome;
    }

    public function recuperarCargo():string
    {
        return $this->cargo;
    }

    public function recuperarCpf():Cpf
    {
        return $this->cpf;
    }
    
}