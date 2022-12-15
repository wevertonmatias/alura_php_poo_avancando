<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$umEndereco = new Endereco('Maceió', 'Tabuleiro', 'Rua tal', '321');
$outroEndereco = new Endereco('Arapiraca', 'Estrela', 'Rua tararal', '123');

//echo $umEndereco . PHP_EOL;
//echo $outroEndereco . PHP_EOL;

echo $umEndereco->rua;