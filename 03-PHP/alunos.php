<?php

$alunos2021 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$novosAlunos = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos];
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');

var_dump($alunos2022);
