<?php

// print "Hello, World!\n";

// $text = "Hello, World!\n";

// print $text;

// $number_of_people = 4; // Variablen, snake_case
// define("PI", 3.14); // Konstanten

// var_dump(PI);

// $number_of_people = 5;

// print "PI ist gleich = " . PI . "\n";
// print "PI ist gleich = " . PI . PHP_EOL;

/* Datentypen

Skalare
    - Numerisch (float, int)
    - Aphanumerisch (string)
    - Wahrheitswert (bool, Werte: true, false)
Nicht-skalare
    - Array (Liste)
    - null

(Konzepte:
    - Daten/Uhrzeiten (oft als integer umgesetzt)
    - Bilder/Grafiken/Dateien (binäre Daten)
    - Connections/Verbindung/Verknüpfung)
*/

// Zeichenketten/Strings

// print $text . PHP_EOL;

// print 'Hello, World!\n

// ';

// $name = "Stephan";
// print "Hello, {$name}!\n";

// Übung:
// Prüft für eine Variable mit Text, ob es sich dabei um ein Palindrom handelt
//
// Beispiele für Palindrome: Otto, Anna, Maoam, Lagerregal 

// $checkForPalindrome = "Anna";

// print PHP_EOL . "❓ Ist '$checkForPalindrome' ein Palindrom?" . PHP_EOL . PHP_EOL;
// var_dump(
//     strtolower($checkForPalindrome) === strrev(strtolower($checkForPalindrome))
// );

/*
Logische Operatoren:

and &&
or ||
!
(xor)

*/

// $age = readline("Wie alt bist du? ");

// if ($age >= 18) {
//     print "Komm rein!";
// }
// else {
//     print "Du kommst hier nicht rein!";
// }

// print PHP_EOL;

// $country = readline("Hauptstadt von: ");

// // Imperativ

// if ($country === "Niederlande") {
//     print "Amsterdam" . PHP_EOL;
// }
// elseif ($country === "Deutschland") {
//     print "Berlin" . PHP_EOL;
// }
// elseif ($country === "Costa Rica") {
//     print "San Jose" . PHP_EOL;
// }
// elseif ($country === "USA") {
//     print "Washington DC" . PHP_EOL;
// }
// else {
//     print "Land nicht gefunden" . PHP_EOL;
// }

// // Deklarativ

// switch ($country) {
//     case "Niederlande":
//         print "Amsterdam" . PHP_EOL;
//         break;
//     case "Deutschland":
//         print "Berlin" . PHP_EOL;
//         break;
//     case "Costa Rica":
//         print "San Jose" . PHP_EOL;
//         break;
//     case "USA":
//         print "Washington DC" . PHP_EOL;
//         break;
//     default:
//         print "Land nicht gefunden" . PHP_EOL;
// }

// // Deklarativ

// $capital = match ($country) {
//     "Niederlande" => "Amsterdam",
//     "Deutschland" => "Berlin",
//     "Costa Rica" => "San Jose",
//     "USA" => "Washington DC",
//     default => "Land nicht gefunden"
// };

// print $capital . PHP_EOL;

/*
Funktionen

- SAS: mathematische Funktionen
- Voraussetzung: Wissen über quantitativen/qualitativen Charakter der Daten

*/

// function capital($country) {
//     $c = match ($country) {
//         "Niederlande" => "Amsterdam",
//         "Deutschland" => "Berlin",
//         "Costa Rica" => "San Jose",
//         "USA" => "Washington DC",
//         default => "Land nicht gefunden"
//     };
//     return $c;
// }

// $country = readline("Hauptstadt von: ");
// print capital($country) . PHP_EOL;

?>