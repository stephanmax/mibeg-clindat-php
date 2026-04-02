<?php

// Arrays

// $animals = ["lion", "mole", "eagle"];
// print var_dump($animals) . PHP_EOL;
// print count($animals) . PHP_EOL;

// array_push($animals, "tiger", "snake", "hamster");
// $hamster = array_pop($animals);

// Mit Vorsicht benutzen!!!
// unset($animals[3]);

// print var_dump(array_is_list($animals));

// print var_dump($animals[0]);
// $animals[0] = "mouse";
// print var_dump($animals[0]);

// for ($i=0; $i < count($animals); $i++) { 
//     print $animals[$i] . PHP_EOL;
// }

// foreach ($animals as $animal) {
//     print $animal . PHP_EOL;
// }

/*
Übung: Schreiben Sie Code der für das untenstehende
Array von Zahlen die Summe berechnet.
*/

$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$sum = 0;
foreach ($numbers as $num) {
    $sum += $num;
}

// Funktional programmiert

function makeSum($acc, $value) {
    return $acc + $value;
}

print var_dump(array_reduce($numbers, "makeSum", 0));


// print "Die Summe ist $sum.\n";

// function mirror(string $word): string {
//     $mirrored = "";
//     for ($i = strlen($word)-1; $i >= 0; $i--) {
//         $mirrored .= $word[$i];
//     }
//     return $mirrored;
// }

// $nums = [34, 127, 45];

// $animalSounds = [
//     "lion" => "roar",
//     "cat" => "meow",
//     "dog" => "wuff"
// ];

// foreach ($animalSounds as $key => $value) {
//     print ("The $key makes: $value.\n");
// }

// $a = [ 12, 3, 47];

// $people = [
//     1234 => [
//         "vorname" => "Stephan",
//         "nachname" => "Max",
//         "lieblingsessen" => "Thai-Curry"
//     ],
//     2334 => [
//         "vorname" => "John",
//         "nachname" => "Doe",
//         "lieblingessen" => "Pasta"
//     ]
// ];

// print var_dump($people);

// $numbers = [237, 29, 34, 12, 1245];

// foreach ($numbers as $number) {
//     print sqr($number) . PHP_EOL;
// }

// array_map(fn ($n) => $n * $n, $numbers);