<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Service\ControladorDeBonificacoes;


$umFuncionario = new Funcionario(
'Weverrton',
'Desenvolvedor',
    new Cpf('123.456.789-10'),
    1500.00);

$umaFuncionaria = new Funcionario(
'Maria',
    'Gerente',
    new Cpf('987.654.321-00'),
    5500.00
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->totalBonificacoa();