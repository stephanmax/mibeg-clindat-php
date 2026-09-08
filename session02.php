<?php
// Übung: Schreibe eine Funktion which_is_smaller,
// die zu zwei Zahlen die kleinere zurückgibt.

// function which_is_smaller1($n1, $n2) {
// 	if ($n1 < $n2) {
//     	return $n1;
//     }
//     else {
//         return $n2;
//     }
// }

// function which_is_smaller2($n1, $n2) {
// 	if ($n1 < $n2) {
//     	return $n1;
//     }
//     elseif ($n1 === $n2) {
//         return "Die beiden Zahlen sind gleich.";
//     }
//     else {
//     	return $n2;
//     }
// }

// function which_is_smaller3($n1, $n2) {
// 	if ($n1 < $n2) {
//     	print $n1 . PHP_EOL;
//     }
//     else {
//         print $n2 . PHP_EOL;
//     }
// }

// Mit ternärem Operator

// function which_is_smaller4($n1, $n2) {
// 	return $n1 < $n2 ? $n1 : $n2;
// }

// Schleifen

// $counter = 0;

// while ($counter >= 0) {
//     print "$counter" . PHP_EOL;
//     // $counter = $counter - 1;
//     // $counter -= 1;
//     $counter--; // $counter++;
// }

// while (true) {
//     $counter++;

//     if ($counter % 5 === 0) {
//         print "$counter ist durch 5 teilbar" . PHP_EOL;
//     }

//     print $counter . PHP_EOL;

//     if ($counter >= 50) {
//         print "Schleife beendet." . PHP_EOL;
//         break;
//     }
// }

// do {
//     print "$counter" . PHP_EOL;
//     $counter--;
// }
// while ($counter >= 20);

// do {
//     $pin = readline("Willkommen zum Online-Banking. Ihre PIN bitte: ");
// } while ($pin !== "cancel");

// for (
//     $i=0; // Startwert
//     $i < 10; // Abbruchbedingung
//     $i += 2 // Step-Funktion
// ) {
//     print "$i\n";
// }

// Übung: Schreib eine Funktion is_even_or_odd, die für eine Zahl
// zurückgibt, ob sie gerade (true) oder ungerade (false) ist

// function is_even_or_odd($num) {
//     if ($num % 2 === 0) {
//         return true;
//     }
//     else {
//         return false;
//     }
// }

// Pseudocode
/*

Funktion is_even_or_odd(num):
    Wenn num modulo 2 0 ist => true
    Sonst => false

*/

// require_once("lib.php");

// print sum(12, 24) . PHP_EOL;

// Übung: Schreib eine Funktion is_prime,
// die für eine Zahl bestimmt, ob sie eine Primzahl ist oder nicht.

// Lösung von Lennart

// function is_prime (int $Zahl) {
//     if ($Zahl < 2) {
//         return false;
//     }

//     $i = 2;

//     do {
//         $i += 1;
//     }
//     while ($Zahl % $i !== 0);
    
//     if ($i === $Zahl) {print_r($Zahl." ist eine Primzahl\n");}
//     else {print_r($Zahl."ist teilbar durch". $i . PHP_EOL );}

//     return $i;
// }

// is_prime(25);

// $num = 42;
// $text = "Tschüss";
// $external = true;

// function test($num, $text) {
//     global $external;
//     print "Innerhalb der Funktion: \$num = $num und \$text = $text\n";
// }

// test(12, "Hallo");

// print "Außerhalb der Funktion: \$num = $num und \$text = $text\n";

// $num = 42;

// function test_func($num) {
//     $num = 13;
// }

// test_func($num);

// print $num . PHP_EOL;

// $num = 42;

// function test_func(&$peter) {
//     $peter = 13;
// }

// test_func($num);

// print $num . PHP_EOL;


$n1 = 42;
$n2 = &$n1;

print $n1 . PHP_EOL;

$n2 = 13;

print $n1 . PHP_EOL;