<?php

$nome = "Luiz Arruda";
$email = "cannioficial@gmail.com";
$senha = "12sdsdfsdf3";

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);


//para deixar maiusculo
echo strtoupper($usuario) . PHP_EOL;


//para deixar minusculo
echo strtolower($senha) . PHP_EOL;

//explode
list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome:' . $nome . PHP_EOL;
echo 'Sobrenome:' . $sobrenome . PHP_EOL;

