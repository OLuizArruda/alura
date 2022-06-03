<?php

function sacar ($conta, $valorASacar)
{
    if ($valorASacar > $conta ['saldo']){
        echo "não pode sacar" . PHP_EOL;
    } else {
        $contas['saldo'] -= $valorASacar;
    }

    return $conta;
}


function exibeMensagem($mensagem) 
{
    echo $mensagem . PHP_EOL;
}

$contascorrentes = [
   '423.697.398-78' => [
    'titular' => 'Maria',
    'saldo' => 10000],

   '145.454.854-88' => [
    'titular' => 'Alberto',
    'saldo' => 300], 

   '111.412.412-51' => [
    'titular' => 'Vinicius',
    'saldo' => 100]
];

$contascorrentes ['423.697.398-78'] = sacar ($contascorrentes ['423.697.398-78'], 500);


$contascorrentes ['423.697.398-78'] ['saldo'] -= 110;
if (110 > $contascorrentes ['423.697.398-78'] ['saldo']){
    echo "não pode sacar" . PHP_EOL;
} else {
    $contascorrentes ['423.697.398-78'] ['saldo'] -= 50;
}

foreach ($contascorrentes as $cpf => $conta){
    exibeMensagem($cpf . " " . $conta ['titular'] . ' ' . $conta ['saldo']);
   };
   