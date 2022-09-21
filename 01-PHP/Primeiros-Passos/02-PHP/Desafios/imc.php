<?php

$peso = 100;
$altura = 1.69;
$imc = $peso / ($altura**2);

if ($imc<18){
    echo "seu IMC é de $imc e se enquandra em Desnustrição";
} else if ($imc >18 && $imc<25){
           echo "seu IMC é de $imc e se enquandra em Normal";
    } else if ($imc >25 && $imc<30){
                echo "seu IMC é de $imc e se enquandra em Pré-obesidade";
            } else {
                echo "seu IMC é de $imc e se enquandra em Godzilla";
            }
