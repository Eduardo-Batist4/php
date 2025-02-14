<?php

// --------------------- //
// Exercicio 1
// --------------------- //

/*
$array = [];

for ($i = 5; count($array) + 1 <= 10;  $i++) {
    $array[] = $i * 5;
};

foreach ($array as $value) {
    echo $value . " \n";
};

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
$vetor2 = [11,12,13,14,15,16,17,18,19];

for ($i = 0; $i <= count($vetor1); $i++) {
    if(isset($vetor2[$i])) {
        $result = $vetor1[$i] * $vetor2[$i];
        echo "Resultado: $result \n";
    }
}

// --------------------- //
// Opcional 7
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

// --------------------- //
// Opcional 8
// --------------------- //

$grade = [54,60,65,71,79,82,76,91,13];
$gradeTotal = 0;
$aboveAverageScore = 0;


for ($i = 0; $i < count($grade); $i++) {
    $gradeTotal += $grade[$i];  
};

$media = number_format($gradeTotal / count($grade), 2);

foreach ($grade as $item) {
    if($item > $media) {
        $aboveAverageScore++;
    };
};

echo "Media dos Alunos: $media \n";
echo "Alunos acima da media: $aboveAverageScore \n";

// --------------------- //
// Opcional 9
// --------------------- //

$namesArray = ["joão", "eduardo", "amanda", "maria"];

$randomName = "mariad";

if (in_array($randomName, $namesArray)) {
    echo "ACHEI \n";
} else {
    echo "NÃO ACHEI \n";
};

// --------------------- //
// Opcional 10
// --------------------- //

$peoples = [];
$peoples[] = ["name" => "Eduardo",  "cidade" => "Curitiba", "idade" => 24, "sexo" => "Masculino"];
$peoples[] = ["name" => "Amanda",  "cidade" => "Ponta grossa", "idade" => 25, "sexo" => "Feminino"];
$peoples[] = ["name" => "Lucas",  "cidade" => "Prudentopolis", "idade" => 14, "sexo" => "Masculino"];
$peoples[] = ["name" => "Joao",  "cidade" => "Guarapuava", "idade" => 18, "sexo" => "Masculino"];
$peoples[] = ["name" => "Matheus",  "cidade" => "Maringa", "idade" => 19, "sexo" => "Masculino"];

foreach ($peoples as $item) {
    echo "Nome: " . $item["name"] . " Idade: " . $item["idade"] . "\n";
};

foreach ($peoples as $item) {
    if($item["cidade"] == "Guarapuava") {
        echo "--------------------------------------------\n";
        echo "Pessoas que moram em Guarapuava: \n";
        echo "--------------------------------------------\n";
        echo "Nome: " . $item["name"] . "\n";        
    };
};

echo "--------------------------------------------\n";
echo "Pessoas maiores de idade: \n";
echo "--------------------------------------------\n";

foreach ($peoples as $item) {
    if($item["idade"] > 18) {
        echo "Nome: " . $item["name"] . " Idade: " . $item["idade"] . "\n";
    };
};

echo "--------------------------------------------\n";
echo "Quantas Mulheres: \n";
echo "--------------------------------------------\n";
foreach ($peoples as $item) {
    $countWomen = 0;
    if($item["sexo"] == "Feminino") {
        $countWomen++;
        echo "Numeros de Mulheres: $countWomen \n";
    };
};
*/

// --------------------- //
// Opcional 11
// --------------------- //

// --------------------- //
// Opcional 12
// --------------------- //

$array = ['23', '7', '12', '32', '83'];
$newArray = [];

function quicksort ($array) {
    if (count($array) < 2) return $array;
    
    $pivot = $array[0];
    $left = []; 
    $right = [];
    
    foreach (array_slice($array, 1) as $num) {
        if ($num < $pivot) {
            $left[] = $num;
        } else {
            $right[] = $num;
        };
    };

    return array_merge(quicksort($left),  [$pivot], quicksort($right));
};

$result = quicksort($array);

print_r($result);
