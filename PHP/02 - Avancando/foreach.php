<?php

$contascorrentes = [
    423697398-78 => [
        'Titular' => 'Luiz Paulo de Arruda',
        'Saldo' => 10000
    ],

    354584747-54 => [
        'Titular' => 'Milena Lima Fernandes de Arruda',
        'Saldo' => 10000
    ],

    545484556-58 => [ 
    'Titular' => 'Celsa Expedita de Lima Fernandes',
    'Saldo' => 25000
    ],

    589965885-54 => [
        'Titular' => 'Antonio Carlos de Arruda',
        'Saldo' => 30000
    ],

    787855565-85 => [
        'Titular' => 'Cleide Aparecida Lopes Paes de Arruda',
        'Saldo' => 25000
    ]
];

foreach ($contascorrentes as $cpf =>$conta){
    echo $cpf . PHP_EOL;
}