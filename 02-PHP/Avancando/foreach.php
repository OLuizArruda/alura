<?php

$contasCorrentes = [
    "423.697.398-78" => [
        "titular" => "Luiz Arruda",
        "saldo" => 1000
    ],

    "333.325.214-52" => [
    "titular" => "Milena Lima Fernandes de Arruda",
    "saldo" => 8000
], 

    "445.154.555-85" => [
        "titular" => "Celsa Expedita",
        "saldo" => 100000
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}


