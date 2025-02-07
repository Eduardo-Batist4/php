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
$reminderDivision = $input_1 % $input_2;

echo "Resultado: $result Resto da divisão: $reminderDivision \n";
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
// Exercicio E
// ---------------------- //

/*
$base = readline("Base: \n");
$height = readline("Altura: \n");

$perimeter = 2 * ($base + $height);
$area = $base * $height;
$diagonal = number_format(sqrt(($base ** 2) + ($height ** 2)), 2);

echo "Perímetro: $perimeter \n";
echo "Area: $area \n";
echo "Diagonal: $diagonal \n";
*/

// ---------------------- //
// Exercicio F
// ---------------------- //

/*
$base = readline("Base: \n");
$height = readline("Altura: \n");

$result = ($base * $height) / 2;

echo "Area do triangulo: $result \n";
*/

// ---------------------- //
// Exercicio G
// ---------------------- //

/*
$longestDiagonal = readline("Diagonal maior: \n");
$smallerDiagonal = readline("Diagonal menor: \n");

$result = ($longestDiagonal * $smallerDiagonal) / 2;

echo "Area do losango: $result \n";
*/

// ---------------------- //
// Exercicio I
// ---------------------- //

/* 
$fixedSalary = readline("Salario fixo: \n");
$numberOfCars = readline("Numeros de carros vendidos: \n");
$commissionValue = readline("Valor da comissao: \n");
$totalSalesValue = readline("Valor total de vendas: \n");

$finalSalary = $fixedSalary + ($numberOfCars * $commissionValue) + (0.05 * $totalSalesValue);

echo "Salario final: $finalSalary";
*/