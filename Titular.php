<?php

Class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(string $nomeTitular, Cpf $cpfTitular, Endereco $endereco)
    {
        $this->validarNome($nomeTitular);
        $this->nomeTitular = $nomeTitular;
        $this->cpfTitular = $cpfTitular;
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}