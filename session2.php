<?php
/* 
Aufgabe: Schreiben Sie eine ===Funktion===, die den Namen
einliest und diesen dann mit "Hallo, <Name>!" begrüßt.
 */

// function greeter($greeting = "Hallo") {
//     $name = readline("Geben Sie bitte Ihren Namen ein: ");
//     print "$greeting, $name!" . PHP_EOL;
// }

// greeter();
// greeter("Moin");
// greeter("Willkommen");

/*
Aufgabe: Schreiben Sie eine Funktion, die ein Wort
einliest und prüft, ob dieses ein Palindrom ist.
Antworten Sie mit einem entsprechenden Text.
*/

// Funktion mit Seiteneffekten, ohne Rückgabewert

// function palindromeChecker() {
//     $word = readline("Wort: ");
//     $isPalindrome = strtolower($word) === strrev(strtolower($word));

//     if ($isPalindrome) {
//         print "Das ist ein Palindrom!\n";
//     }
//     else {
//         print "Das ist kein Palindrom!\n";
//     }
//     // return brauchen wir hier nicht
// }

// Pure Funktion mit Parameter und Rückgabewer, ohne Seiteneffekte

// function is_palindrom(string $word): bool {
//     $lower = strtolower($word);
//     return $lower === strrev($lower);
// }

// $input = "";
// print "Tippen Sie 'Ende' um das Programm zu beenden.\n";

// while (true) {
//     $input = readline("Bitte geben Sie ein Wort ein: ");

//     // Abbruchbedingung
//     if ($input === "Ende") {
//         // Schleife verlassen
//         break;
//     }

//     if (is_palindrom($input)) {
//         echo "Das Wort '$input' ist ein Palindrom." . PHP_EOL;
//     } else {
//         echo "Das Wort '$input' ist kein Palindrom." . PHP_EOL;
//     }
// }

// $num = 0;

// while ($num <= 1000) {
//     print "$num\n";
//     $num++;
// }

// function is_even_or_odd(int $num): string {
//     return $num % 2 === 0 ? "$num ist gerade.\n" : "$num ist ungerade.\n";
//     // Ternärer Operator
//     // <bool> ? <true> : <false>
//     /*
//     if (<bool>) {
//         return <true>;
//     }
//     else {
//         return <false>;
//     }
//     */
// }

// print is_even_or_odd(10);
// print is_even_or_odd(15);

// for ($i = 0; $i <= 100000; $i++) {
//     print "$i\n";
// }

/*
Schreiben Sie eine Funktion `isPrime(int $num): bool`, die
für eine Zahl $num zurückgibt, ob sie eine Primzahl ist oder nicht.

Primzahl = einen Zahl, die nur durch 1 und sich selbst restlos teilbar ist

Primzahlen: 2, 3, 5, 7, 11, 13, 17, ...
*/

// $num = 13
// $div = 2
// A:
// Ich berechne $num % $div = $rest
// If $rest !== 0, dann $div++ und springe zu A

// Ist der Rest irgendwann mal 0, dann ist es KEINE Primzahl
// Sind alle Reste !== 0, ist es eine Primzahl

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }

    $root = sqrt($num + 1);
    for ($i=2; $i < $root; $i++) { 
        if ($num % $i === 0) {
            return false;
        }    
    }

    return true;
}

while (true) {
    $num = readline("Primzahl? ");
    print isPrime($num) ? "Ja.\n" : "Nein.\n";
}





















/*
Schreiben Sie eine Funktion `isPrime(int $num): bool`, die
für eine Zahl $num zurückgibt, ob sie eine Primzahl ist oder nicht.

Primzahl = einen Zahl, die nur durch 1 und sich selbst restlos teilbar ist

Primzahlen: 2, 3, 5, 7, 11, 13, 17, ...

Ist 13 eine Primzahl?

13 % 2 = 1
13 % 3 = 1
13 % 4 = 1
13 % 5 = 3
13 % 6 = 1
13 % 7 = 6
13 % 8 = 5
13 % 9 = 4
13 % 10 = 3
13 % 11 = 2
13 % 12 = 1

Ist 9 eine Primzahl?

9 % 2 = 1
9 % 3 = 0 // AHA! => KEINE Primzahl

Pseudocode

$num = 13
$div = 2
A:
Ich berechne $num % $div = $rest
If $rest !== 0, dann $div++ und springe zu A

Ist der Rest irgendwann mal 0, dann ist es KEINE Primzahl
Sind alle Reste !== 0, ist es eine Primzahl

*/