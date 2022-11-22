<?php


use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Endereco;

require_once "autoload.php";

$conta = new Conta(
    new Titular( 
        'Weverton',
        new Cpf ('123.456.789-10'),
        new Endereco('Maceió', 'Lala', 'Tete', '3223-8922'),
    ), 2
    );

$conta->depositar(500);
$conta->sacar(100);
$conta->mostrarSaldo();