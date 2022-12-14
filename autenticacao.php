<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;


$diretor = new Diretor('Paulino', new Cpf('321.498.594-19'), 10000);
$gerente = new Gerente('Paulino', new Cpf('321.498.594-19'), 10000);
$titular = new Titular('Ana Paula', new Cpf('498.494.164-29'), new Endereco('', '', '', ''));

$autenticador = new Autenticador();

$autenticador->tentaLogin($diretor, '1234');
$autenticador->tentaLogin($gerente, '43210');
$autenticador->tentaLogin($titular, 'abc');

