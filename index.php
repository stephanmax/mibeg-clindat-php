<?php
// Alles aus einer anderen Datei importieren
require_once "functions.php";

// // Text mit Zeilenumbruch als Escape-Sequenz \n
// print "Hello, World!\n";
// // Text mit Konstante, die PHP mitbringt (Betriebssystem-agnostisch)
// print "Hello, World2!" . PHP_EOL;

// // Variablen
// $currentSQLQuery = "alt". PHP_EOL;
// print $currentSQLQuery;
// $currentSQLQuery = "neu". PHP_EOL;
// print $currentSQLQuery;

// // Konstanten
// define("MY_PI", 3.14);
// print MY_PI . PHP_EOL;

// DATENTYPEN
// Skalaren Typen: string, int, float, bool
// Nicht-Skalaren: array
// Speziell: NULL

// $fruit = "apple";
// $str1 = "I like {$fruit}s." . PHP_EOL;
// print $str1;

// 1. "Stephan lernt gerade PHP."
// $name = "Stephan";
// print "$name lernt gerade PHP.\n";

// // 2. Palindrom-Checker
// $checkForPalindrome = "Madam, I'm Adam";
// var_dump(
    // preg_replace("/[^a-z]/", "", strtolower($checkForPalindrome))
    // ===
    // strrev(preg_replace("/[^a-z]/", "", strtolower($checkForPalindrome)))
// );

// Logische Operatoren: and / &&, or / ||, not / !, xor

// $strErwachsen = "";
// $age = 5;

// if ($age >= 18) {
//     $strErwachsen = "volljährig";
// }
// else {
//     $strErwachsen = "minderjährig";
// }

// $strErwachsen = $age >= 18 ? "volljährig" : "minderjährig";

// var_dump($strErwachsen);

// $daten = [2, 4, 8, NULL, 10];

// foreach ($daten as $wert) {
//     print ($wert ?? 12) . PHP_EOL;
// }

// print "Diese Variable kommt aus index.php: $var\n";

// DRY: Don’t Repeat Yourself
// $answer = which_is_smaller(10, 10);
// var_dump($answer);

// $var = 5;
// increment($var);
// print "\$var außerhalb Funktion: $var\n";


// Schleifen/Loops

$counter = 10;

while ($counter >= 20) {
    print "$counter" . PHP_EOL;
    $counter--;
}

do {
    print "$counter" . PHP_EOL;
    $counter--;
}
while ($counter >= 20);

for ($i=0; $i < 10; $i += 2) {
    print "$i\n";
}