<?php

$contascorrentes = [
    42369739878 => [
        'Titular' => 'Luiz Paulo de Arruda',
        'Saldo' => 10000
    ],

    35458474754 => [
        'Titular' => 'Milena Lima Fernandes de Arruda',
        'Saldo' => 10000
    ],

    54548455658 => [ 
    'Titular' => 'Celsa Expedita de Lima Fernandes',
    'Saldo' => 25000
    ],

    58996588554 => [
        'Titular' => 'Antonio Carlos de Arruda',
        'Saldo' => 30000
    ],

    78785556585 => [
        'Titular' => 'Cleide Aparecida Lopes Paes de Arruda',
        'Saldo' => 25000
    ]
];

foreach ($contascorrentes as $cpf =>$conta){
    echo $cpf . PHP_EOL;
}