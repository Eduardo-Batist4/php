<?php

// --------------------- //
// Exercicio 1
// --------------------- //

/* 
$value = readline("Numero: ");

if($value > 10) {
    echo "É maior que 10! \n";
} else {
    echo "Não é maior que 10! \n";
};


// --------------------- //
// Exercicio 2
// --------------------- //


$value = readline("Numero: ");

if($value >= 0) {
    echo "Positivo! \n";
} else {
    echo "Negativo! \n";
};


// --------------------- //
// Exercicio 3
// --------------------- //


$appleQuantity = readline("Quantas maçãs: \n");

if($appleQuantity < 12) {
    $result = number_format($appleQuantity * 1.30, 2);
    echo "Valor Total: R$: $result \n";
} else {
    $result = number_format($appleQuantity * 1.00, 2);
echo "Valor Total: R$: $result \n";
};


// --------------------- //
// Exercicio 4
// --------------------- //


$firstGrade = readline("Primeira Nota: \n");
$secondGrade = readline("Segunda Nota: \n");

$average = ($firstGrade + $secondGrade) / 2;

if($average >= 60) {
    echo "Aluno foi Aprovado! Média: $average \n";
} else {
    echo "Aluno foi Reprovado! Média: $average \n";
};


// --------------------- //
// Exercicio 5
// --------------------- //


$yearOfBirth = readline("Ano de Nascimento: \n");

$calculateAge = 2025 - $yearOfBirth;

if($calculateAge < 16) {
    echo "Sua idade: $calculateAge \n Não pode votar!";
} else if ($calculateAge >= 16 && $calculateAge < 18) {
    echo "Sua idade: $calculateAge \n Voce pode votar! \n Não pode tirar a carteira! \n";
} else {
    echo "Sua idade: $calculateAge \n Voce pode votar! \n Voce pode tirar a carteira! \n";
}


// --------------------- //
// Exercicio 6
// --------------------- //


$firstValue = readline("Primeiro Numero: \n");
$secondValue = readline("Segundo Numero: \n");

if($firstValue > $secondValue) {
    echo "O $firstValue é maior do que $secondValue \n";
} else {
    echo "O $secondValue é maior do que $firstValue \n";
};


// --------------------- //
// Exercicio 7
// --------------------- //


$swimmerAge = readline("Idade do nadador: \n");

if($swimmerAge >= 5 && $swimmerAge <= 7) {
    echo "O nadador é da categoria Infantil A: 5 até 7 anos \n";
} else if ($swimmerAge >= 8 && $swimmerAge <= 10) {
    echo "O nadador é da categoria Infantil B: 8 até 10 anos \n";
} else if ($swimmerAge >= 11 && $swimmerAge <= 13) {
    echo "O nadador é da categoria Juvenil A: 11 até 13 anos \n";
} else if ($swimmerAge >= 14 && $swimmerAge <= 17) {
    echo "O nadador é da categoria Juvenil B: 14 até 17 anos \n";
} else if ($swimmerAge > 18) {
    echo "O nadador é da categoria Sênior: maiores de 18 anos \n";
} else {
    echo "O nadador não tem categoria \n";
};


// --------------------- //
// Exercicio 8
// --------------------- //


$productValue = readline("Valor produto: \n");

$cashWith10Discount = $valueProduct - ($valueProduct * 0.1);
$cardWith5Discount = $valueProduct - ($valueProduct * 0.05);
$regular = $valueProduct;
$withInterest10 = $valueProduct + ($valueProduct * 0.1);

echo "Á vista em dinheiro com 10% de desconto: $cashWith10Discount \n";
echo "Á vista no cartão com 5% de desconto: $cardWith5Discount \n";
echo "Em 2 vezes, preço normal da etiqueta: $regular \n";
echo "Em 3 vezes, preço normal da etiqueta com juros de 10%: $withInterest10 \n";


// --------------------- //
// Exercicio 9
// --------------------- //


$number = readline("Digite um numero: \n");

if($number >= 30 && $number <= 90) {
    echo "O numero $number está entre 30 e 90 \n";
} else if($number > 120) {
    echo "O numero $number é maior que 120 \n";
} else {
    echo "O numero $number não se encaixa \n";
}


// --------------------- //
// Exercicio 10
// --------------------- //


$productValue = readline("Valor do produto: \n");

$profit45Percent = $productValue + ($productValue * 0.45);
$profit30Percent = $productValue + ($productValue * 0.3);

if($productValue < 20) {
    echo "Margem de lucro de 45%: R$:$profit45Percent \n";
} else {
    echo "Margem de lucro de 30%: R$:$profit30Percent \n";
};

// --------------------- //
// OPCIONAL 11
// --------------------- //

// Não entendi

// --------------------- //
// OPCIONAL 12
// --------------------- //

$value1 = readline("Primeiro Numero: \n");
$value2 = readline("Segundo Numero: \n");
$value3 = readline("Terceiro Numero: \n");
$value4 = readline("Quarto Numero: \n");

$pair = PHP_INT_MAX;

if($value1 % 2 == 0) {
    if($value1 < $pair) {
        $pair = $value1;
        echo "Menor valor par: $pair \n";
    }
} else if ($value2 % 2 == 0) {
    if($value2 < $pair) {
        $pair = $value2;
        echo "Menor valor par: $pair \n";
    }
} else if ($value3 % 2 == 0) {
    if($value3 < $pair) {
        $pair = $value3;
        echo "Menor valor par: $pair \n";
    }
} else if ($value4 % 2 == 0) {
    if($value4 < $pair) {
        $pair = $value4;
        echo "Menor valor par: $pair \n";
    }
} else {
    echo "Nenhum valor é par! \n";
}

// --------------------- //
// OPCIONAL 13
// --------------------- //

$startTimeOfTheGame = readline("Horário de inicio: \n");
$endTimeOfTheGame = readline("Horário final: \n");

$calculateHour = $endTimeOfTheGame - $startTimeOfTheGame;

if($endTimeOfTheGame < $startTimeOfTheGame) {
    $result = (24 - $startTimeOfTheGame) + $endTimeOfTheGame;
    echo "A duração do jogo foi de: $result horas \n";
} else {
    echo "A duração do jogo foi de: $calculateHour horas \n";
};

// --------------------- //
// OPCIONAL 14
// --------------------- //

$hoursWorked = readline("Horas trabalhadas: \n");
$hourlyWage = readline("Salario por hora: \n");

$regularMonthlyHours = 40 * 4;
$basicSalary = $regularMonthlyHours * $hourlyWage;

if($hoursWorked > $regularMonthlyHours) {
    $overtime = $hoursWorked - $regularMonthlyHours;
    $overtimeValue = $hourlyWage + ($hourlyWage * 0.5);
    $totalSalary = $basicSalary + ($overtime * $overtimeValue);
    
    echo "\nSalário base: R$:$basicSalary \n";
    echo "Horas extra: $overtime horas\n";
    echo "Valor da horas extra: R$:$overtimeValue \n";
    echo "Salário total: R$:$totalSalary \n";
} else if ($hoursWorked == 160) {
    $basicSalary = $hoursWorked * $hourlyWage;
    echo "\nSalário base: R$:$basicSalary \n";
    echo "Horas extra: 0 horas\n";
} else {
    $hourlyWageLess = $hoursWorked * $hourlyWage;
$discount5Percent = $hourlyWageLess * 0.05;
$discountedSalary = $hourlyWageLess - $discount5Percent;

echo "\nSalário base: R$:$hourlyWageLess \n";
echo "Horas extra: 0 horas\n";
echo "Desconto de: R$:$discount5Percent \n";
echo "Salário total: R$:$discountedSalary \n";
}

// --------------------- //
// OPCIONAL 15
// --------------------- //

$fixedSalary = readline("Salário fixo: \n");
$salesValue = readline("Valor das vendas: \n");


if($salesValue <= 1500) {
    $commisionOf3Percent = $fixedSalary + ($salesValue * 0.03);
    echo "$commisionOf3Percent \n";
} else {
    $commisionOf5Percent = 1500 * 0.03 + (($salesValue - 1500) * 0.05);
$totalSalary = $fixedSalary + $commisionOf5Percent;
echo "$totalSalary \n";
}
*/
