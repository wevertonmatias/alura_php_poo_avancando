<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Cpf;

$diretor = new Diretor('Paulino', new Cpf('321.498.594-19'), 10000);

$autenticador = new Autenticador();

$autenticador->tentaLogin($diretor, '1234');

