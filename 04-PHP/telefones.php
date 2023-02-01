<?php

$telefones = ['(15) 99601-4183', '(15) 65656-9999', '(15) 99644-8588'];

echo implode(PHP_EOL, $telefones) . PHP_EOL;




//aparar as strings (trim, ltrim, rtrim)

$cadastro = ",. Luiz Paulo de Arruda, 31 anos          .,";
echo trim($cadastro, ".  ,") . PHP_EOL;
echo ltrim($cadastro, ".  ,") . PHP_EOL;
echo rtrim($cadastro, ".  ,") . PHP_EOL;