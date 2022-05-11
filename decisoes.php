<?php

$idade = 14;
$pessoas = 2;

echo "Você só pode entrar se tiver mais de 18 anos ou a partir de 16 anos e acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade anos, pode entrar";
} else if ($idade >= 16 && $pessoas >1) {
    echo "Você tem apenas $idade anos, mas pode entrar acompanhado";
} else {
    echo "Você tem apenas $idade anos e não pode entrar";
}


echo PHP_EOL;
echo "Adeus";

