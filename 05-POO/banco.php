<?php

require_once 'C:\Users\Windows 10\Desktop\Projeto\src\05-POO\Conta.php';
require_once 'C:\Users\Windows 10\Desktop\Projeto\src\05-POO\Titular.php';

$primeiraConta = new Conta(new Titular('423.697.398-00','Jose marria'));
var_dump($primeiraConta);
//$primeiraConta->depositar(2800);
//$primeiraConta->sacar(300);

new Conta(new Titular('454.555.555-87', 'Josaria Antunes'));
new Conta(new Titular('454.555.555-78', 'Maria Antunes'));
echo Conta::recuperaNumeroDeContas();