<?php

$contasCorrentes = [
    42369739878 => [
        'titular' => "Luiz",
        'saldo' => 10000
    ],

    12345678910 => [
    'titular' => "Milena",
    'saldo' => 10000
], 

    45454222521 => [
        'titular' => "Cleide",
        'saldo' => 20000    
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo "Conta-corrente de " . $cpf . PHP_EOL;
}