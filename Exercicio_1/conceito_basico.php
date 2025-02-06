<?php

// ---------------------- //
// Exercicio A
// ---------------------- //
/* 
echo 'First number: ';
$input_1 = readline();
echo "\n";

echo 'Second number: ';
$input_2 = readline();
echo "\n";

$result = $input_1 / $input_2;

echo "Resultado: $result";
*/

// ---------------------- //
// Exercicio B 
// ---------------------- //
/* 
echo 'First grade: ';
$input_1 = readline();
$weight1 = 1;
echo "\n";

echo 'Second grade: ';
$input_2 = readline();
$weight2 = 2;
echo "\n";

echo 'third grade: ';
$input_3 = readline();
$weight3 = 3;
echo "\n";

echo 'Fourth grade: ';
$input_4 = readline();
$weight4 = 4;
echo "\n";

$calculate = (($input_1 * $weight1) + ($input_2 * $weight2) + ($input_3 * $weight3) + ($input_4 * $weight4)) / ($weight1 + $weight2 + $weight3 + $weight4);

echo "Resultado: " . number_format($calculate, 2);
*/

// ---------------------- //
// Exercicio C 
// ---------------------- //
/* 
echo 'Value product: ';
$valueProduct = readline();

echo 'Percent: ';
$percent = readline();

$newValue = $valueProduct * ( 1 + ($percent / 100));

echo "Novo preço: " . number_format($newValue, 2);
*/

// ---------------------- //
// Exercicio D
// ---------------------- //
/* 
echo 'Salary: ';
$salary = readline();

echo 'quilowatts: ';
$quilowatts = readline();

$valueQuilowatt = number_format(($salary / 7) / 100, 3);  
$amountToBePaid = $valueQuilowatt * $quilowatts;
$discountedPrice = $amountToBePaid * 0.90;

echo "Valor de cada quilowatt: R$:" . number_format($valueQuilowatt, 2) . "\n";
echo "Valor: R$:" . number_format($amountToBePaid) . "\n";
echo "Valor com Desconto de 10%: R$:" .  number_format($discountedPrice) . "\n";

*/

// ---------------------- //
// Exercicio D
// ---------------------- //