<?php

function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta ['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
    $conta ['saldo'] -= $valorASacar;
    }  

    return $conta;
}



function exibeMensagem ($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
   42369739878 => [
    'nome' => 'Luiz Arruda',
    'saldo' => 2400
],
   37825545855 => [
    'nome' => 'Milena Fernandes',
    'saldo' => 2600
],
   12544542155 => [
    'nome' => 'Celsa Expedita',
    'saldo' => 1900
]
];

$contasCorrentes['42369739878'] = sacar($contasCorrentes['42369739878'], 500);
$contasCorrentes['37825545855'] = sacar($contasCorrentes['37825545855'], 2800);

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem ($cpf . " " . $conta ['nome'] . " " . $conta['saldo']);
}

