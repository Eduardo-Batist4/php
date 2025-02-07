<?php

// --------------------- //
// Exercicio 1
// --------------------- //

/*
for ($i = 1; $i < 11; $i++) {
    echo "$i \n";
};
*/

// --------------------- //
// Exercicio 2
// --------------------- //

/*
$media = 0;

for ($i = 1; $i < 11; $i++) {
    echo "$i \n";
    $media += $i;
};

$resultMedia = $media / 10;

echo "A media é: $resultMedia \n";
*/

// --------------------- //
// Exercicio 3
// --------------------- //

/*
$count = 0;
$sumNums = 0;

while(true) {
    $input = readline("Digite um numero: \n");
    
    if($input != 0) {    
        $count++;
        $sumNums += $input;
    } else {
        $media = number_format($sumNums / $count, 2);
    echo "Somatória: $sumNums \n";
    echo "Média: $media \n";
    echo "Quantidade de valores lidos: $count \n";
    exit;
};
};
*/

// --------------------- //
// Exercicio 4
// --------------------- //

/*
$count = 0;
$sum = 0;

for ($i = 50; $i <= 70; $i++) {
    if($i % 2 == 0) {
        $count++;
        $sum += $i;
    }
}
$media = $sum / $count;

echo "Somatoria: $sum \n";
echo "Média: $media \n";
*/

// --------------------- //
// Exercicio 5
// --------------------- //

$smaller = 0;
$larger = 0;

while(true) {
    $number = readline("Digite um numero: \n");
    
    if($number != 0) {
        if($number > $larger) {
            $larger = $number;
        } else if ($smaller  && $number != 0) {
            $smaller = $number;
        }
    } else {
        echo "Menor numero: $smaller \n";
        echo "Maior numero: $larger \n";
        exit;
    }
};






