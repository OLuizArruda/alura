<?php

require_once 'C:\Users\Windows 10\Desktop\Projeto\src\05-POO\Conta.php';

$primeiraConta = new Conta ('423.697.398-00','Jose marria');
var_dump($primeiraConta);
//$primeiraConta->depositar(2800);
//$primeiraConta->sacar(300);

new Conta ('454.555.555-87', 'Josaria Antunes');
new Conta ('454.555.555-78', 'Maria Antunes');
new Conta ('454.555.555-88', 'Antunes');
echo Conta::recuperaNumeroDeContas();