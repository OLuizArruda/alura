<?php

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo "Sim, é um array" . PHP_EOL;
}

//var_dump(array_is_list($notas));

/*foreach($notas as $alunos => $notas){
    if ($aluno === "Vinicius"){
        return true;
    } 
}*/

//var_dump(array_key_exists('Ana', $notas));

echo "Ana fez a prova?" . PHP_EOL;
var_dump(isset($notas["Ana"]));

echo "Alguem tirou 10?" . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo "Quen tirou 10?" . PHP_EOL;
echo array_search(10, $notas);


//array_key_exists = verifica se a chave existe;
//in_array = verifica se o valor da chave existe;
//isset = verifica se a chave existe e o valor não é nulo;
//array_search = traz a chave do resultado buscado;