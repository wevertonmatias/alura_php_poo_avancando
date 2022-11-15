<?php

namespace Modelo\Conta;

Class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(string $nomeTitular, Cpf $cpfTitular, Endereco $endereco)
    {
        parent::__construct($nomeTitular, $cpfTitular);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}