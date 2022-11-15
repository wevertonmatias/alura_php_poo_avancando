<?php

require_once "Pessoa.php";
require_once "Funcionario.php";
require_once "Endereco.php";
require_once "Cpf.php";
require_once "Titular.php";
require_once "Conta.php";

//$endereco = new Endereco('Maceió', 'Terere', 'Mosca', '445');
$cpf = new Cpf('123.456.789-10');
$umFuncionario = new Funcionario('Pedrinho', 'Faz Tudo', $cpf);
$umFuncionario->alterarNome("blcccc");
var_dump($umFuncionario);
