<?php

/* for ($i= 1; $i<=10; $i++){
    $resul = $i * 2;
    echo "#$i x 2 = $resul" . PHP_EOL;
    } */
    
    
/*$peso = 80;
$alt = 1.70;
$imc = $peso / $alt ** 2;

if ($imc < 17){
    echo "Seu IMC é de $imc, Resultado: Morrendo" . PHP_EOL;
}
elseif ($imc >17 && $imc <=25){
    echo "Seu IMC é de $imc, Resultado: Okay até" . PHP_EOL;
} 
else echo "Seu IMC é de $imc, Resultado: gordo" . PHP_EOL;
*/

/*$idadelist = [21, 23, 25, 44, 55, 88];

for ($i=0; $i <count ($idadelist); $i++){
    echo $idadelist [$i] . PHP_EOL;
}*/



/*$arraynomes = ["ana", "pedro", "joao", "jose", "uelito"];
for ($i = 0; $i < count($arraynomes); $i++){
    echo $arraynomes[$i] . PHP_EOL;
}*/


/*
$conta1 = [
    'titular' => 'Luiz',
    'saldo' => 15000
];

$conta2 = [
    'titular' => 'Humberto',
    'saldo' => 1500
];

$conta3 = [
    'titular' => 'Sandro',
    'saldo' => 800
];

$contascorrentes = [$conta1, $conta2, $conta3];
for ($i = 0; $i< count($contascorrentes); $i++){
    echo $contascorrentes [$i] ['saldo'] . PHP_EOL;
} */

/*
$contascorrentes = [
   '423.697.398-78' => [
    'titular' => 'Luiz',
    'saldo' => 15000],

   '145.454.854-88' => [
    'titular' => 'Humberto',
    'saldo' => 1500], 

   '111.412.412-51' => [
    'titular' => 'Sandro',
    'saldo' => 800]
];
    $contascorrentes ['112.225.555-88'] = [
    'titular' => 'claudio',
    'saldo' => 100];


foreach ($contascorrentes as $cpf => $conta){
    echo $cpf . " " . $conta ['saldo'] . PHP_EOL;
}
*/

$carros = [
    'LMS-2232' => [
       'marca' => 'VW',
       'modelo' => 'Golf'
    ],
    'KLM-1324' => [
        'marca' => 'Ford',
        'modelo' => 'Fiesta'
    ],
    'OPN-5612' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ],
];

foreach ($carros as $placa => $carro) {
    echo $placa . ': ' . $carro['marca'] . PHP_EOL;
}