<?php

// Saida
// echo = precisa percorrer a array e não consegue imprimir array diretamente;
// print = imprime um por vez e sempre retorna 1;


// echo "Saida com echo\n"; 
// print "Saida com print\n";

// Variavel
$variavelString = "É uma variavel";

// Constante
define('time', 'Flamengo'); // echo time -> Flamengo

// is_string() => verifica se é uma string
// isInt() => verifica se é inteiro
// is_float() => verifica se é um float
// is_boolen() => verifica se é um boolean

// Concatenação
$concat = "Fallen " . "goat\n";

// Array
$array = ['um', 'dois', 'tres'];

$array[] = 'quatro'; // Adiciona um elemento no array
unset($array[2]); // Remove um Elemento da array

// Array associativo
$arrayA1 = array('um' => 1, 'dois' => 2, 'tres' => 3); // echo $array1['um'];
$arrayA1['quatro'] = 4;

$arrayA2 = ['um' => 1, 'dois' => 2, 'tres' => 3]; // echo $array2['dois'];

// if ternario
// print(false ? 'não fico impresso' : 'fico')


// ------------------------------------- //
// Objetos
// ------------------------------------- //

class Person {
    function speak() {
        return 'estou falando';
    }
};

$joao = new Person();
$joao->speak();

// ------------------------------------- //
// Função
// ------------------------------------- //

function minha_função () {
    return 'Bom dia!';
}; // echo minha_função(); // => 'Bom dia!'

// Função anonima
$anonima = function ($x) {
    return $x + 1;
}; // echo $anonima(2) // => 3
// ------------------------------------- //

