<?php
require_once 'autoload.php';

use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Service\ControladorDeBonificacoes;


$umFuncionario = new Desenvolvedor(
'Weverrton',
    new Cpf('123.456.789-10'),
    1000.00);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Diretor(
'Maria',
    new Cpf('987.654.321-00'),
    5000.00
);

$umGerente = new Gerente(
    'Patrícia',
    new Cpf('321.654.987-10'),
    3000);

$umEditorVideo = new EditorVideo(
    'Jorge José',
    new Cpf('123.498.164-16'),
    1500);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umGerente);
$controlador->adicionaBonificacaoDe($umEditorVideo);

echo $controlador->totalBonificacoa();

