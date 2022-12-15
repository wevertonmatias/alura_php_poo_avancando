<?php

namespace Alura\Banco\Modelo;

trait AcessoPropriedade
{
    public function __get($atributo)
    {
        $metodo = 'recuperar'.ucfirst($atributo);
        return $this->$metodo();
    }
}