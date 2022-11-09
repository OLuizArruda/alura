<?php

function sacar($valor)
{
    return $valor + 500;
}


$totalSaque = sacar(1215);
echo $totalSaque . PHP_EOL;

exit();


$contasCorrentes = [
    42369739878 => [
     'nome' => 'Luiz Arruda',
     'saldo' => 2400
 ]