<?php

// --------------------- //
// Exercicio 1
// --------------------- //

/*
for ($i = 1; $i < 11; $i++) {
    echo "$i \n";
};


// --------------------- //
// Exercicio 2
// --------------------- //


$media = 0;

for ($i = 1; $i < 11; $i++) {
    echo "$i \n";
    $media += $i;
};

$resultMedia = $media / 10;

echo "A media é: $resultMedia \n";


// --------------------- //
// Exercicio 3
// --------------------- //

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


// --------------------- //
// Exercicio 4
// --------------------- //


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


// --------------------- //
// Exercicio 5
// --------------------- //


$smaller = PHP_INT_MAX;
$larger = PHP_INT_MIN;

while(true) {
    $number = readline("Digite um numero: \n");
    
    if($number != 0) {
        if($number > $larger) {
            $larger = $number;
        }
        if($number < $smaller) {
            $smaller = $number;
        }
    } else {
        echo "Menor numero: $smaller \n";
    echo "Maior numero: $larger \n";
    exit;
}
};


// --------------------- //
// OPCIONAL 6
// --------------------- //

 
while(true) {

    $firstGrade = readline("Primeira nota: \n");
    $secondGrade = readline("Segunda nota: \n");

    if($firstGrade >= 0 && $firstGrade <= 10 && $secondGrade >= 0 && $secondGrade <= 10) {
        $calculateAverage = ($firstGrade + $secondGrade) / 2;

        echo "Média: $calculateAverage \n";

        $newCalculate = readline("Novo cálculo? (S/N) \n");

        if($newCalculate == 's' || $newCalculate == 'S') {
            system('clear');
            continue;
        } else {
            system('clear');
            exit;
        };

    } else {
        echo "Nota inválida! (0 a 10). \n";
    };
};


// --------------------- //
// OPCIONAL 7
// --------------------- //

 
$quantityOfNegativeNumbers = 0;

for ($i = 0; $i < 10; $i++) {
    $number = readline("Digite um numero: \n");
    if($number < 0) {
        $quantityOfNegativeNumbers++;
    };
};

echo "Quantidade de numeros negativos: $quantityOfNegativeNumbers \n";

// --------------------- //
// OPCIONAL 8
// --------------------- //


$totalValue = 0;
$totalMerchandise = 0;

while (true) {

    echo "Cadastrar (1) \n";
    echo "Resultado (2) \n";
    $menuOption = readline("Escolha uma opção do menu: \n");
    system('clear');

    if($menuOption != 2) {
        $valueProduct = readline("Valor da mercadoria:  \n");
        $totalMerchandise++;
        $totalValue += $valueProduct;
        system('clear');
    } else {
        if($totalMerchandise > 0) {
            $calculateAverage = $totalValue / $totalMerchandise;
            echo "Valor total do estoque: $totalValue \n";
            echo "Média do valor das mercadorias: $calculateAverage \n";
            exit;
        } else {
            echo "Nenhuma mercadoria cadastrada.\n";
            exit;
        };
    };
};


// --------------------- //
// OPCIONAL 9
// --------------------- //

$totalValue = 0;
$totalMerchandise = 0;

while (true) {

    $valueProduct = readline("Valor da mercadoria:  \n");
    $totalMerchandise++;
    $totalValue += $valueProduct;
    $more = readline("Mais mercadorias (S/N)? \n");
    system('clear');

    if($more == 's' || $more == 'S') {
        continue;
    } else {
        $calculateAverage = number_format($totalValue / $totalMerchandise, 2);
        echo "Valor total do estoque: R$:$totalValue \n";
        echo "Média do valor das mercadorias: R$:$calculateAverage \n";
        exit;
    };
};

// --------------------- //
// OPCIONAL 10
// --------------------- //

for ($i = 1; $i <= 10; $i++) {
    for ($x = 1; $x <= 10; $x++) {
        $multiplication = $i * $x;
        echo "$i x $x: " . $multiplication . " \n";
    };
    echo "---------------------------------\n";
};
*/


