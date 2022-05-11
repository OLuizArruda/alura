<?php

$peso = 100;
$alt = 1.69;
$imc = $peso / $alt ** 2;
    
echo "seu imc é de: $imc, você esta com faixa de imc ";
    
if ($imc <18) {
        echo "abaixo";
} elseif ($imc <25) {
        echo "dentro";
} else {
        echo "acima";
}

    echo " do recomendado";