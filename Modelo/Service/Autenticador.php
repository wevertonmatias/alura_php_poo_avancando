<?php

namespace Alura\Banco\Modelo\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)){
            echo 'Ok, usuário logado.' . PHP_EOL;
        }else{
            echo 'Ops! Senha incorreta.' . PHP_EOL;
        }
    }
}