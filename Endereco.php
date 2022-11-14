<?php

Class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function pegarCidade()
    {
        return $this->cidade;
    }

    public function pegarBairro()
    {
        return $this->bairro;
    }

    public function pegarRua()
    {
        return $this->rua;
    }

    public function pegarNumero()
    {
        return $this->numero;
    }
}