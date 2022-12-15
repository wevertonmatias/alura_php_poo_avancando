<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;

$dev = new Desenvolvedor('Weverton Matias', new Cpf('123.456.789-10'), 1500.00);
echo $dev->nome . PHP_EOL;