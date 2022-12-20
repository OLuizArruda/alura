<?php

$idade = 15;
$pessoas = 2;

echo "Bem-vindo, você só pode entrar se tiver a partir de 18 anos ou 17 anos e acompanhado" . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos, pode entrar sozinho" . PHP_EOL;
} else if ($idade>=17 && $pessoas>1) { 
    echo "Você só tem $idade anos, mas esta acompanhado pode entrar";
} else {
    echo "Você só tem $idade anos, não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";
