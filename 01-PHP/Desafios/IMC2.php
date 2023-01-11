<?php

$peso = 53;
$altura = 1.55;
$imc = $peso / $altura ** 2;


if ($imc < 18){
    echo "Seu IMC é de $imc, Você está abaixo do peso ideal";
} elseif ($imc >18 && $imc < 25){
    echo "Seu IMC é de $imc, Você está dentro do peso ideal";
  } else {
    echo "JAMANTA!";
  }