<?php

require_once("./lib.php");

// Beispiel für continue

// Alle Vielfachen von 3
// for ($i=1; $i <= 50; $i++) { 
//     if ($i % 3 !== 0) {
//         continue;
//     }

//     print $i . PHP_EOL;
// }

// print "Fertig!" . PHP_EOL;

// Palindrom-Checker als Funktion, siehe lib.php

// draw, o coward!
// !drawoc o ,ward

// drawocoward
// drawocoward ✅

// Wenn die Zeichen nicht wären! + Leerzeichen auch!

// $potentialPalindromes = [
//     "Sit on a potato pan, Otis!",
//     "Ein Sachse mit Gazelle sagt im Regen nie.",
//     "Swap God for a janitor; rot in a jar of dog paws.",
//     "Anna hetzte Hanna.",
//     "Bananarama",
//     "Reib, Tim, eine Brandnarbe nie mit Bier!",
//     "Leg Raps ein, nie Spargel."
// ];


// Andrea
function is_fizzbuzz(int $num) {
    for (
        $i = $num + 1;
        $i > 0;
        $i--
    ) {
        if ($i % 3 === 0) {
            print "fizz";
        }
        if ($i % 5 === 0) {
            print "buzz";
        }
    }
}

is_fizzbuzz(16);

// Anna
function fizzbuzz2(int $num): array
{
    for ($i = 1; $i <= $num; $i++) {
        $text = $i;

        if ($i % 3 == 0) {
            $text = "fizz";
        }

        if ($i % 5 == 0) {
            $text = "buzz";
        }

        if ($i % 15 == 0) {
            $text = "fizzbuzz";
        }

        $ergebnis[] = $text;
    }
    return $ergebnis;
}
$ergebnis = fizzbuzz2(20);
print_r($ergebnis);

$var = 5;

$arr = [5, "Stephan", "Max", "Köln", true];
$arrToSort = [-5, 42, 13, 3.55, 27, 1200];
// $arr2 = array(5, "Stephan", "Max", "Köln", true);

// Ein Element hinzufügen
$arr[] = 42;

// Array-Größe
print "Das Array hat " . count($arr) . " Elemente.";

// Mehrere Elemente hinzufügen
array_push($arr, 13, false, "Hallo");

// Element entfernen
$last_element = array_pop($arr);
sort($arrToSort);

var_dump($arrToSort);

$arr = [5, 42, 17, 13, -5, 145, 13.56, 0.2, 12];

// Mit while

$index = 0;
$size = count($arr);
$sum = 0; // Akkumulator, Akku, acc

while ($index < $size) {
    $sum = $sum + $arr[$index];
    $index++;
}

/*
=== Ablaufprotokoll ===

while:
    $index = 0, $sum = 0
        $sum = 0 + 5 = 5
        $index = 1
    
    $index = 1, $sum = 5
        $sum = 5 + 42 = 47
        $index = 2

    $index = 2, $sum = 47
        $sum = 47 + 17 = 64
        $index = 3
*/

// Mit for

print 'Durchschnitt von $arr: ' . ($sum/$size) . PHP_EOL;

$sum = 0;

for ($i=0; $i < count($arr); $i++) { 
    $sum = $sum + $arr[$i];
}

// Mit foreach

$sum = 0;
$size = count($arr);

foreach ($arr as $num) {
    $sum += $num;
}

print 'Durchschnitt von $arr: ' . ($sum/$size) . PHP_EOL;

$potentialPalindromes = [
    "Sit on a potato pan, Otis!",
    "Ein Sachse mit Gazelle sagt im Regen nie.",
    "Swap God for a janitor; rot in a jar of dog paws.",
    "Anna hetzte Hanna.",
    "Bananarama",
    "Reib, Tim, eine Brandnarbe nie mit Bier!",
    "Leg Raps ein, nie Spargel."
];

foreach ($potentialPalindromes as $p) {
    print (is_palindrome($p) ? "✅ " : "❌ ") . $p . PHP_EOL;
}