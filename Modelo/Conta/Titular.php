<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Autenticavel;

Class Titular extends Pessoa implements Autenticavel
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

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abc';
    }
}