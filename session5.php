<?php
$nums = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76,
    63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
    65, 64, 68, 73, 75, 79, 73];
// // // Aufgabe: PHP-Skript, das für dieses Array Maximum, Minimum und Durchschnitt ermittelt.
// // Sie sollen nur eine höherwertige Funktion nutzen.

// var_dump(array_reduce($nums,fn($c, $n)=>["a"=>$n>$c["a"]?$n:$c["a"],"b"=>$n<$c["b"]?$n:$c["b"],"c"=>$c["c"]+$n/count($nums)],["a"=>$nums[0],"b"=>$nums[0],"c"=>0]));

$result = array_reduce(

    // 1. Array
    $nums,

    // 2. Funktion (Fat-Arrow-Funktion, in Python Lambda genannt)
    fn ($carry, $num) => [
        "max" => $num > $carry["max"] ? $num : $carry["max"], // ternärer Operator (? :), einfaches `if`
        "min" => $num < $carry["min"] ? $num : $carry["min"],
        "avg" => $carry["avg"] + $num / count($nums)
    ],
    // Aufpassen: `=>` (Fat-Arrow-Funktion) ist nicht gleich `=>` (assoziatives Array, Schlüssel => Wert)

    // 3. initial Wert (auch Akku oder Carry genannt)
    [
        "max" => $nums[0],
        "min" => $nums[0],
        "avg" => 0
    ]
);

// var_dump($result);

// Wiederholung/Vertiefung

// Referenzen

// $a = 5;

// function changeA(&$a) {
//     $a = $a + 1;
//     return $a;
// }

// $result = changeA($a); // changeA(5)

// var_dump($a); // 5 by value, 6 by reference
// var_dump($result); // 6

// ---

// $b = ["x", "y", "z"];

// function changeB($arr) {
//     array_pop($arr);
//     return $arr;
// }

// $result = changeB($b);

// var_dump($result);

// -- Funktionen

// Klassisch
function sumMaker1($a, $b) {
    return $a + $b;
}

// Anonym
$sumMaker2 = function($a, $b) {
    return $a + $b;
};

// Fat Arrow
$sumMaker3 = fn($a, $b) => $a + $b;

// --

// $arr = [
//     "max" => 42,
//     "min" => 1,
//     "avg" => 3.556
// ];

// var_dump($arr["max"]);

// Schreiben Sie eine Funktion `factorial`, die die Fakultät einer Zahl `n` berechnet.
// 5! = 5 * 4 * 3 * 2 * 1 = 120
// 3! = 3 * 2 * 1 = 6
// 0! = 1

// $n = readline("geben Sie Zahl > O    ");

// function factorial($n) { // $n = 1
//     $result = 1;

//     for ($i = $n; $i > 0; $i--) {
//         // 1. $i = $n = 1
//         // 2. Ist die Laufbedingung $i > 0 wahr?
//         //          $i = 1
//         //          1 > 0 ✅
//         // 3. Schleife wird betreten!
//         // 4. $result = $result * $1 = 1 * 1 = 1
//         // 5. Schleife geht in die nächste Runde
//         //          $i--
//         //          $i = 0
//         // 2. Ist die Laufbedingung $i > 0 wahr?
//         //          $i = 0
//         //          0 > 0 ❌ => Schleife wird beendet
//         $result *= $i; // äquivalent zu: $result = $result * $i;
//     }

//     return $result;
// }

// echo factorial($n) . PHP_EOL;

// function factorial($n) {
//     $result = 1;
//     for ($i = 1; $i <= $n; $i++) {
//         $result *= $i;
//     }
//     return $result;
// }

// print factorial(5) . PHP_EOL;

// ---

// $nums = [5, 4, 3, 2, 1];

// $result = array_reduce(
//     $nums,
//     fn ($carry, $num) => $carry * $num,
//     1
// );

// var_dump($result);

/**
 * 5! = 5 * 4!
 *    = 5 * 4 * 3!
 *    = 5 * 4 * 3 * 2!
 *    = 5 * 4 * 3 * 2 * 1!
 *    = 5 * 4 * 3 * 2 * 1 * 0!
 *    = 5 * 4 * 3 * 2 * 1 * 1
 *    = 120
 */

// Rekursion, rekursive Funktionen
// = die Kunst, etwas durch sich selbst auszudrücken

function factorial($n) {
    if ($n <= 0) {
        return 1;
    }
    else {
        return $n * factorial($n - 1);
    }
}

// ---

define('FILENAME', 'data/demo.db');
$connection = new PDO('sqlite:' . FILENAME); // PDO = PHP Data Objects

$sql = "CREATE TABLE IF NOT EXISTS trees (id integer PRIMARY KEY, height float, germanName text)";
$stmt1 = $connection->prepare($sql);
$stmt1->execute();

define("KEY_ID", 0);
define("KEY_HEIGHT", 15);
define("KEY_NAME", 22);
define("SKIP_ROWS", 1);

$rows = 0;

if (($handle = fopen("./data/baumbestand_koeln_2020.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, separator: ";")) !== FALSE) {
        $rows++;

        if ($rows <= SKIP_ROWS) {
            continue;
        }

        $id = $data[KEY_ID];
        $height = $data[KEY_HEIGHT];
        $germanName = $data[KEY_NAME];

        $sql = "INSERT INTO trees (id, height, germanName) VALUES (?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->execute([$id, $height, $germanName]);

        print "Stored '$germanName' with height $height m." . PHP_EOL;
    }

    fclose($handle);
}