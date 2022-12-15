<?php

namespace Alura\Banco\Modelo;

/**
 * class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $rua
 * @property-read string $numero
 * @property-read string $bairro
 * @property-read string $cidade
 */

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

    public function __toString(): string
    {
        return "{$this->rua} {$this->numero}, {$this->bairro} - {$this->cidade}";
    }

    public function __get($atributo)
    {
        $metodo = 'pegar'.ucfirst($atributo);
        return $this->$metodo();
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