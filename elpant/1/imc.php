<?php

$peso = 91;
$altura = 1.69;
$imc = $peso / $altura ** 2;


echo "Seu imc é de $imc, você está com o IMC ";

if ($imc <= 16.5) {
    echo "Magrelo";
} elseif ($imc >16.5 && $imc<= 22){
    echo "Normalzao";
} else {
    echo "Meteoro de Pegasussssssssss";
}

echo " do recomendado";


