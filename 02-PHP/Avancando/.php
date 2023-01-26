<?php


$listaNomes = [
    42369739878 => "José",
    45454255454 => "Maria",
    15165165115 => "Jesus",
    45215151515 => "Antonio"
];

foreach ($listaNomes as $cpf => $nome){
    echo $cpf . " " . $nome . PHP_EOL;
}




/*
for ($i=0; $i<count($listaNomes); $i++)
{
    echo "O nome é: $listaNomes[$i]" . PHP_EOL;
}*/



