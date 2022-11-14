<?php

require_once "Endereco.php";
require_once "Cpf.php";
require_once "Titular.php";
require_once "Conta.php";

$endereco = new Endereco('Maceió', 'Terere', 'Mosca', '445');
$cpf = new Cpf('123.456.789-10');
$titular = new Titular('Weverton Matias', $cpf, $endereco);
$conta = new Conta($titular);

var_dump($conta);
