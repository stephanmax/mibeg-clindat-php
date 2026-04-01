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

function palindromeChecker() {
    $word = readline("Wort: ");
    $isPalindrome = strtolower($word) === strrev(strtolower($word));

    if ($isPalindrome) {
        print "Das ist ein Palindrom!";
    }
    else {
        print "Das ist kein Palindrom!";
    }
    // return brauchen wir hier nicht
}
palindromeChecker();

// Pure Funktion mit Parameter und Rückgabewer, ohne Seiteneffekte

function is_palindrom(string $word): bool {
    $lower = strtolower($word);
    return $lower === strrev($lower);
}

$input = readline("Bitte geben Sie ein Wort ein: ");

if (is_palindrom($input)) {
    echo "Das Wort '$input' ist ein Palindrom." . PHP_EOL;
} else {
    echo "Das Wort '$input' ist kein Palindrom." . PHP_EOL;
}