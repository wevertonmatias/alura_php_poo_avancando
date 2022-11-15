<?php

require_once "Modelo/Pessoa.php";
require_once "Modelo/Funcionario.php";
require_once "Modelo/Endereco.php";
require_once "Modelo/Cpf.php";
require_once "Modelo/Conta/Titular.php";
require_once "Modelo/Conta/Conta.php";

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario;

//$endereco = new Endereco('Maceió', 'Terere', 'Mosca', '445');
$cpf = new Cpf('123.456.789-10');
$umFuncionario = new Funcionario('Pedrinho', 'Faz Tudo', $cpf);
$umFuncionario->alterarNome("blcccc");
var_dump($umFuncionario);
