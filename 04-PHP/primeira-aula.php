<?php

$nome = 'Luiz antonio';
//procurar se estring esta dentro de outra.

$eDaMinhaFamilia = str_contains($nome, 'Arruda');

if ($eDaMinhaFamilia){
    echo "$nome é da minha familia" . PHP_EOL;
} else {
    echo "$nome não é da minha familia" . PHP_EOL;
}