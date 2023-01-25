<?php

$conta1 = [
    "titular" => "Luiz Arruda",
    "saldo" => 1000
];

$conta2 = [
    "titular" => "Milena Lima Fernandes de Arruda",
    "saldo" => 8000
];

$conta3 = [
    "titular" => "Celsa Expedita",
    "saldo" => 100000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0;  $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i] ["titular"] . PHP_EOL;
}
