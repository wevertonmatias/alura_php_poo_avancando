<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Service\ControladorDeBonificacoes;


$umFuncionario = new Funcionario(
'Weverrton',
'Desenvolvedor',
    new Cpf('123.456.789-10'),
    1000.00);

$umaFuncionaria = new Diretor(
'Maria',
    'Gerente',
    new Cpf('987.654.321-00'),
    5000.00
);

$umGerente = new Gerente(
    'Patrícia',
    'Gerente',
    new Cpf('321.654.987-10'),
    3000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umGerente);

echo $controlador->totalBonificacoa();