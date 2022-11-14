<?php

class Pessoa
{
    public $nome;
    public $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperarNome(): string
    {
        return $this->nome;
    }

    public function recuperarCpf(): string
    {
        return $this->cpf->recuperarNumero();
    }

    public function validarNome(string $nome): void
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }
}