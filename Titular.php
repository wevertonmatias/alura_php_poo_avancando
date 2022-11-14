<?php

Class Titular
{
    private string $nomeTitular;
    private Cpf $cpfTitular;
    private Endereco $endereco;

    public function __construct(string $nomeTitular, Cpf $cpfTitular, Endereco $endereco)
    {
        $this->validarNome($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->cpfTitular = $cpfTitular;
        $this->endereco = $endereco;
    }

    private function validarNome(string $nome): void
    {
        if(strlen($nome) < 5){
            echo "Nome precisa ter pelo menos 5 caracteres.";
            exit();
        }
    }

    public function mostrarCpfTitular(): Cpf
    {
        return $this->cpfTitular;
    }

    public function mostrarNometitular(): string
    {
        return $this->nomeTitular;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}