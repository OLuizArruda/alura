<?php

$conta1 = [
    'titular' => "Luiz",
    'saldo' => 10000
];

$conta2 = [
    'titular' => "Milena",
    'saldo' => 10000
];

$conta3 = [
    'titular' => "Cleide",
    'saldo' => 20000    
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i=0; $i < count($contasCorrentes); $i++){
    echo "Conta-corrente de " . $contasCorrentes[$i] ['titular'] . PHP_EOL;
}


