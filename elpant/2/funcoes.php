<?php

function sacar($conta, $valorASacar){
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar, saldo insuficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta ;
}

function depositar($conta, float $valorADepositar){
    if ($valorADepositar < 0){
        exibeMensagem("Somente valores positivos!");
    } else {
        $conta['saldo'] += $valorADepositar;
    }

    return $conta;
}



function exibeMensagem($mensagem)
{
    echo $mensagem . '<br>';
}
