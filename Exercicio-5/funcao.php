<?php


// --------------------- //
// Exercicio 1
// --------------------- //

/*
while (true) {
    system("clear");
    echo "-------------------------- \n";
    echo "(1) Soma \n";
    echo "(2) Subtração \n";
    echo "(3) Multiplicação \n";
    echo "(4) Divisão \n";
    echo "-------------------------- \n";
    $option = readline("Opção: \n");
    
    if($option == "1") {
        system("clear");
        $num1 = readline("Primeiro Numero: \n");
        $num2 = readline("Segundo Numero: \n");
        sum($num1, $num2);
    } else if ($option == "2") {
        system("clear");
        $num1 = readline("Primeiro Numero: \n");
        $num2 = readline("Segundo Numero: \n");
        subtraction($num1, $num2);
    } else if ($option == "3") {
        system("clear");
        $num1 = readline("Primeiro Numero: \n");
        $num2 = readline("Segundo Numero: \n");
        multiplication($num1, $num2);
    } else if ($option == 4) {
        system("clear");
        $num1 = readline("Primeiro Numero: \n");
        $num2 = readline("Segundo Numero: \n");
        division($num1, $num2);
    } else {
        system("clear");
    };
};


function sum ($a, $b) {
    echo "-------------------------- \n";
    echo "Resultado Soma: " . $a + $b . "\n";
    echo "-------------------------- \n";
    readline("Aperte Enter para continuar. \n");
};

function subtraction ($a, $b) {
    echo "-------------------------- \n";
    echo "Resultado Subtração: " . $a - $b . "\n";
    echo "-------------------------- \n";
    readline("Aperte Enter para continuar. \n");
};

function multiplication ($a, $b) {
    echo "-------------------------- \n";
    echo "Resultado Multiplicação: " . $a * $b . "\n";
    echo "-------------------------- \n";
    readline("Aperte Enter para continuar. \n");
};

function division ($a, $b) {
    if ($a == 0 || $b == 0) {
        echo "-------------------------- \n";
        echo "Não posso dividir por 0! \n";
        echo "-------------------------- \n";
    }
    echo "-------------------------- \n";
    echo "Resultado Divisão: " . $a / $b . "\n";
    echo "-------------------------- \n";
    readline("Aperte Enter para continuar. \n");
};


// --------------------- //
// Exercicio 2
// --------------------- //

function multipleOf4 ($num) {
    return $num % 4 == 0 ? "true\n" : "false \n";
};

function isInt ($num) {
    return $num % 2 == 0 ? "true\n" : "false \n";
};

function sumInt ($num1, $num2) {
    $total = 0;
    for ($i = $num1 + 1; $i < $num2; $i++) {
        $total += $i;
    };
    echo "c) Soma total: $total \n";
};

function sumInt2 ($num1, $num2, $num3) {
    $total = 0;
    for ($i = $num2 + 1; $i <= $num3; $i++) {
        if($i % $num1 == 0) {
            $total += $i;
        }
    };
    echo "d) Soma total: $total \n";
    
};

function calculateWeight ($height, $gender) {
    if ($gender == "m" || $gender == "M") {
        $idealWeightM = number_format((72.7 * $height) - 58, 2);
        echo "e) Peso ideal Masculino: $idealWeightM kg \n";
    } else if ($gender == "f" || $gender == "F") {
        $idealWeightF = number_format((62.1 * $height) - 44.7, 2);
        echo "e) Peso ideal Feminino: $idealWeightF kg \n";
    } else {
        echo "Para definir genero apenas com (M/F)! \n";
    }
}

$response1 = multipleOf4(18);
$response2 = isInt(18);
$response3 = sumInt(1,4);
$response4 = sumInt2(2,5,10);
$response5M = calculateWeight(1.75, 'm');
$response5F = calculateWeight(1.65, 'f');


echo "a) Numero inteiro: $response2 \n";
echo "b) Multiplo de 4: $response1 \n";
echo $response3;
echo " $response4 \n";
echo " $response5M \n";
echo " $response5F \n";

// --------------------- //
// Opcional 3
// --------------------- //

function intArray ($arr) {
    $bigger = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if($arr[$i] > $bigger) {
            $bigger = $arr[$i];
        };
    };
    echo "O maior numero é: $bigger \n";
};

intArray([110,12,91,7,31]);
*/

// --------------------- //
// Opcional 4
// --------------------- //

$temp = readline("Temperatura: \n");
$currentUnit = readline("Temperatura atual (C/F/K): \n");
$newUnitTemp = readline("Converter para (C/F/K): \n");

if($currentUnit == 'c' || $currentUnit == 'C') {
    celsius($temp, $newUnitTemp);
} else if ($currentUnit == 'f' || $currentUnit == "F") {
    fahrenheit($temp, $newUnitTemp);
} else if ($currentUnit == 'k' || $currentUnit == "K") {
    kelvin($temp, $newUnitTemp);
}

function celsius ($temp, $newUnit) {
    if($newUnit == "f" || $newUnit == "F") {
        $tempCelsiusToFahreinheit = ($temp * 1.8) + 32;
        echo "Temperatura Celsius: $temp Para Fahreinheit: {$tempCelsiusToFahreinheit}F \n";
    } else if ($newUnit == "k" || $newUnit == "K") {
        $tempCelsiuToKelvin = $temp + 273.15;
        echo "Temperatura Celsius: $temp Para Kelvin: {$tempCelsiuToKelvin}K \n";
    };
};

function fahrenheit ($temp, $newUnit) {
    if($newUnit == "c" || $newUnit == "C") {
        $tempFahreinheitToCelsius = ($temp - 32) / 1.8;
        echo "Temperatura Fahreinheit: $temp Para Celsius: {$tempFahreinheitToCelsius}C \n";
    } else if ($newUnit == "k" || $newUnit == "K") {
        $tempFahreinheitToKelvin = ($temp - 32) / 1.8 + 273.15;
        echo "Temperatura Fahreinheit: $temp Para Kelvin: {$tempFahreinheitToKelvin}K \n";
    };
}

function kelvin ($temp, $newUnit) {
    if($newUnit == "c" || $newUnit == "C") {
        $tempKelvinToCelsius = $temp - 273.15;
        echo "Temperatura Kelvin: $temp Para Celsius: {$tempKelvinToCelsius}C \n";
    } else if ($newUnit == "f" || $newUnit == "F") {
        $tempFahreinheitToKelvin = ($temp - 273.15) * 1.8 + 32;
        echo "Temperatura Kelvin: $temp Para Fahreinheit: {$tempFahreinheitToKelvin}K \n";
    };
}
