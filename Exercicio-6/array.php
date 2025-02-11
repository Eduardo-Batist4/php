<?php

// --------------------- //
// Exercicio 1
// --------------------- //
/*

// --------------------- //
// Exercicio 2
// --------------------- //

$array = [4,20,38,42,5,15,71,-8,-9,-10,];
$negativeNum = 0;
$positiveNum = 0;
$pairs = 0;
$odd = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < 0) {
        $negativeNum++;
    } else if ($array[$i] % 2 == 0) {
        $positiveNum++;
        $pairs++;
    } else {
        $odd++;
    };
};

echo "Numeros Negativos Digitados: $negativeNum \n";
echo "Numeros Positivos Digitados: $positiveNum \n";
echo "Numeros Pares Digitados: $pairs \n";
echo "Numeros Ímpares Digitados: $odd \n";

// --------------------- //
// Exercicio 3
// --------------------- //


$array = [1,14,6,86,17,55, 120];
$bigger = 0;
$index = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $bigger) {
        $bigger = $array[$i];
        $index = $i;
    };
};

echo "Maior valor: $bigger Indice: $index \n";

// --------------------- //
// Exercicio 4
// --------------------- //

$vetorA = [14,5,32,47,59,6,71,89,91,10];
$randomNum = 5;
$variableB = $randomNum;
$vetorC = [];

for ($i = 0; $i < count($vetorA); $i++) {
    $vetorC[] = [$vetorA[$i] * $variableB];
};

print_r($vetorC);
echo "\n";

// --------------------- //
// Exercicio 5
// --------------------- //

$array = [1,2,3,4,5,6,7,8,9,10];
$reverseArray = [];

for ($i = count($array) - 1; $i >= 0; $i--) {
    $reverseArray[] = [$array[$i]];
};

print_r($reverseArray);
print_r(array_reverse($array));

// --------------------- //
// Exercicio 6
// --------------------- //

$vetor1 = [1,2,3,4,5,6,7,8,9,10];
$vetor2 = [11,12,13,14,15,16,17,18,19,20];

$input1 = readline("Primeira posição: \n");
$input2 = readline("Segunda posição: \n");

$result = $vetor1[$input1] * $vetor2[$input2];

echo "Resultado: $result \n";


// --------------------- //
// Exercicio 7
// --------------------- //

$mounth = [
    "1" => "Janeiro", 
    "2" => "Fevereiro", 
    "3" => "Março", 
    "4" => "Abriu", 
    "5" => "Maio", 
    "6" => "Junho", 
    "7" => "Julho", 
    "8" => "Agosto", 
    "9" => "Setembro", 
    "10" => "Outubro", 
    "11" => "Novembro", 
    "12" => "Dezembro",
];

$monthNumber = readline("Numero do mês: \n");

$resultMonth = $mounth[$monthNumber];

echo "Numero do mês: $monthNumber, Mês: $resultMonth \n";
*/

// --------------------- //
// Exercicio 8
// --------------------- //

$grade = [54,60,65,77,79,82,76,91,93];
$gradeTotal = 0;
$aboveAverageScore = 0;


for ($i = 0; $i < count($grade); $i++) {
    $gradeTotal += $grade[$i];  
};

$media = $gradeTotal / count($grade);

foreach ($grade as $item) {
    if($item > $media) {
        $aboveAverageScore++;
    };
};

echo count($grade) . " \n";
echo "Media dos Alunos: $media \n";
echo count($grade) . " \n";