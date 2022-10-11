<?php

$conta1 = [
    'nome' => 'Luiz Arruda',
    'saldo' => 2400
];

$conta2 = [
    'nome' => 'Milena Fernandes',
    'saldo' => 2600
];

$conta3 = [
    'nome' => 'Celsa Expedita',
    'saldo' => 1900
];

$contascorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contascorrentes); $i++)
echo $contascorrentes[$i] ['nome'] . PHP_EOL; 


