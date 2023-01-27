<?php

$url = "https://www.alura.com.br/";

//verifica começo string
if (str_starts_with($url, "https")){
    echo "É uma URL segura";
} else {
    echo "Não é uma URL segura";
}

echo PHP_EOL;

//verifica fim string
if (str_ends_with($url, ".br")){
    echo "É um dominio do Brasil";
} else {
    echo "Não é um dominio do Brasil";
}

