<?php

require_once("./lib.php");

/**
 * $nums = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
 * 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
 * var_dump(array_reduce($nums,fn($c, $n)=>
 * ["a"=>$n>$c["a"]?$n:$c["a"],"b"=>$n<$c["b"]?$n:$c["b"],"c"
 * =>$c["c"]+$n/count($nums)],
 * ["a"=>$nums[0],"b"=>$nums[0],"c"=>0]));
 */

$nums = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$result = array_reduce(
    // Array, das wir verarbeiten
    $nums,
    
    // Verarbeitungsfunktion
    fn($c, $n) => [
        "max" => $n > $c["max"] ? $n : $c["max"],
        "min" => $n < $c["min"] ? $n : $c["min"],
        "avg" => $c["avg"] + $n / count($nums)
    ],
    
    // Startwert
    [
        "max" => $nums[0],
        "min" => $nums[0],
        "avg" => 0
    ]
);

// var_dump($result);

// Schwer verständlich, sehr verschachtelt, einfacher lesbar wäre wünschenswert
// Funktionsaufruf, Min/Max/Avg, Variablennamen schwer lesbar
// array_reduce = Kalkulation, Ergebnis ist ein einziger Wert
//   Frage: Woher kommen $c und $n?
// fn = Arrow-Funktion ( => ), anonyme Funktion

// Imperative Code

$input = [1, 2, 3, 4, 5, 6];

$evenNumbers = [];

foreach ($input as $num) {
    if ($num % 2 === 0) {
        $evenNumbers[] = $num;
    }
}

// var_dump($evenNumbers);

// Deklarativer Code

// Funktionsdeklaration


// Höherwertige Funktionen, funktionale Programmierung

$output1 = array_filter($input, "filter_even");

// Funktionsausdruck
$filter_even = function($num) {
    return $num % 2 === 0;
};

$output2 = array_filter($input, $filter_even);

$output3 = array_filter($input, function($num) { return $num % 2 === 0; });

$output4 = array_filter($input, fn($num) => $num % 2 === 0);

// ===========

// Fakultät einer Zahl
// 5! = 120
// 3! = 1 * 2 * 3 = 6

function factorial_loop($n) {
    $result = 1;

    if ($n < 1) {
        return 0;
    }
    // Start mit 2 um die idempotente Berechnung „Multiplikation mit 1“ zu überspringen
    for ($i=2; $i <= $n; $i++) { 
        $result = $result * $i;
    }

    return $result;
}

/**
 * 1! = 1
 * 2! = 1 * 2 = 2
 * 3! = 1 * 2 * 3 = 6
 * 4! = 1 * 2 * 3 * 4 = 24
 * 5! = 1 * 2 * 3 * 4 * 5 = 120
 * 5! = 4! * 5
 * 4! = 3! * 4
 * 3! = 2! * 3
 * 2! = 1! * 2
 * 1! = 1
 * 
 */

function factorial_rec($num) {
    if ($num <= 1) {
        return 1;
    }

    return $num * factorial_rec($num-1);
}