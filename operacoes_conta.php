<?php

require_once "autoload.php";

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario;

//$endereco = new Endereco('Maceió', 'Terere', 'Mosca', '445');
$cpf = new Cpf('123.456.789-10');
$umFuncionario = new Funcionario('Pedrinho', 'Faz Tudo', $cpf);
$umFuncionario->alterarNome("blcccc");
var_dump($umFuncionario);
