<?php

$contascorrentes = [
    '423.697.398-78' => [
        'Titular' => 'Luiz Paulo de Arruda',
        'Saldo' => 10000
    ],

    '354.584.747-54' => [
        'Titular' => 'Milena Lima Fernandes de Arruda',
        'Saldo' => 10000
    ],

    '545.484.556-58' => [ 
    'Titular' => 'Celsa Expedita de Lima Fernandes',
    'Saldo' => 25000
    ],

    '589.965.885-54' => [
        'Titular' => 'Antonio Carlos de Arruda',
        'Saldo' => 30000
    ],

    '787.855.565-85' => [
        'Titular' => 'Cleide Aparecida Lopes Paes de Arruda',
        'Saldo' => 25000
    ]
];

if (500 > $contascorrentes ['423.697.398-78'] ['Saldo']){
    echo "Você não pode sacar";
} else {
$contascorrentes ['423.697.398-78'] ['Saldo'] -= 500;
}

foreach ($contascorrentes as $cpf =>$conta){
    echo $cpf . " ". $conta['Titular'] . ' '. $conta['Saldo'] . PHP_EOL;
}