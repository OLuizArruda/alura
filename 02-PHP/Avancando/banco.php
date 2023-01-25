<?php

// puxar outros arquivos php
//include 'depositar.php'; 
//include 'sacar.php';
//include 'exibeMensagem.php';

//quando os arquivos importados são obrigatorios para funcionar
require 'depositar.php';
require 'sacar.php';
require 'exibeMensagem.php';

//garante que o arquivo será incluído apenas uma vez
// require_once 'nome.php'

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

if (500 > $contasCorrentes['423.697.398-78'] ['saldo']){
    echo exibeMensagem ("Você não pode sacar");
} else {
    $contasCorrentes['423.697.398-78'] ['saldo'] -= 500;
}

$contasCorrentes['423.697.398-78'] = sacar(
    $contasCorrentes['423.697.398-78'],
    500
);

$contasCorrentes['333.325.214-52'] = sacar(
    $contasCorrentes['333.325.214-52'],
    200
);

$contasCorrentes['445.154.555-85'] = depositar(
    $contasCorrentes['445.154.555-85'],
    900
);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem(
        $cpf . " " . $conta["titular"] . ' ' . $conta["saldo"]
    ); 
}