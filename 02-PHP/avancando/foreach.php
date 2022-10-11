<?php

$contasCorrentes = [
   42369739878 => [
    'nome' => 'Luiz Arruda',
    'saldo' => 2400
],

   37825545855 => [
    'nome' => 'Milena Fernandes',
    'saldo' => 2600
],

   12544542155 => [
    'nome' => 'Celsa Expedita',
    'saldo' => 1900
]
];

$contasCorrentes[11551151154] = [
    'nome' => 'Cleide Lopes',
    'saldo' => 1600
];


foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL;

}