<?php

Class Titular
{
    private string $nomeTitular;
    private Cpf $cpfTitular;

    public function __construct(string $nomeTitular, Cpf $cpfTitular)
    {
        $this->validarNome($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->cpfTitular = $cpfTitular;
    }

    private function validarNome(string $nome): void
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }

    public function mostrarCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function mostrarNometitular(): string
    {
        return $this->nomeTitular;
    }
}