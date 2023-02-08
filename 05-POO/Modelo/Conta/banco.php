<?php

require_once 'C:/Users/Windows 10/Desktop/Projeto/src/05-POO/Conta.php';
require_once 'C:/Users/Windows 10/Desktop/Projeto/src/05-POO/Endereco.php';
require_once 'C:/Users/Windows 10/Desktop/Projeto/src/05-POO/Titular.php';
require_once 'C:/Users/Windows 10/Desktop/Projeto/src/05-POO/CPF.php';


$endereco = new Endereco('Tatui', 'meu bairro', 'minha rua', '271');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$endereco2 = new Endereco('Itu', 'rua louca', 'bairro doido', '999');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $endereco2));
//unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
