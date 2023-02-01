<?php

$email = "cannioficial@gmail.com";
$senha = "12sdsdfsdf3";

//tamanho da string len = lenght
if (strlen($senha) < 8) {
    echo "Senha Insegura" . PHP_EOL;
} else {
    echo "Senha Segura" . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

//extrai pedaço do texto
echo substr($email, 0, 5) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;




