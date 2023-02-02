<?php

$anoNascimento = '1991';

$anoAtual = '2023';

$idade = $anoAtual - $anoNascimento;

echo "Sua idade é $idade anos, voce é "; 

if ($idade <= 17){
    echo "novinho" . PHP_EOL;
} else {
    echo "idosinho";
}
