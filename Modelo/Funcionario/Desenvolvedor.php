<?php

namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{

    public function sobeDeNivel()
    {
        $this->receberAumento($this->recuperaSalario() * 0.75);
    }
}