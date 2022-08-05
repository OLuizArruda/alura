<?php

$idade = 31;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver mais de 18 anos ou 17 anos e estiver acompanhado." . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos, pode entrar sozinho" . PHP_EOL;
} else if ($idade == 17 && $numeroDePessoas > 1){
    echo "Você tem $idade anos, pode entrar pois esta acompanhado";
} else {
    echo "Você tem $idade anos, não pode entrar" . PHP_EOL;
    echo "É uma pena" . PHP_EOL;
}

echo "Adeus";

