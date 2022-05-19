<?php

$conta1 = [
    'Titular' => 'Luiz Paulo de Arruda', 'Saldo' => 10000
];

$conta2 = [
    'Titular' => 'Milena Lima Fernandes de Arruda', 'Saldo' => 10000
];

$conta3 = [
    'Titular' => 'Celsa Expedita de Lima Fernandes', 'Saldo' => 25000
];

$conta4 = [
    'Titular' => 'Antonio Carlos de Arruda', 'Saldo' => 30000
];

$conta5 = [
    'Titular' => 'Cleide Aparecida Lopes Paes de Arruda', 'Saldo' => 25000
];


$contascorrentes = [$conta1, $conta2, $conta3, $conta4, $conta5];

for ($i = 0; $i < count($contascorrentes); $i++){
    echo $contascorrentes [$i] ['Titular'] . PHP_EOL;
}



