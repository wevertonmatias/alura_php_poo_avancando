<?php

namespace Alura\Banco\Modelo\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha)
    {
        if ($diretor->podeAutenticar($senha)){
            echo 'Ok, usuário logado.';
        }else{
            echo 'Ops! Senha incorreta.';
        }
    }
}