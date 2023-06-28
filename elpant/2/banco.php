<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '423.697.398-78' => [
        'titular' => "Luiz", 
        'saldo' => 100
    ],

    '123.456.789-10' => [
    'titular' => "Milena",
    'saldo' => 10000
], 

    '454.542.225-21' => [
        'titular' => "Cleide",
        'saldo' => 20000    
    ]
];


$contasCorrentes ['423.697.398-78'] = sacar(
    $contasCorrentes['423.697.398-78'], 500
);

$contasCorrentes ['423.697.398-78'] = depositar(
    $contasCorrentes['423.697.398-78'], -1222
);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}