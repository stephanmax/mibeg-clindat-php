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

// $counter = 10;

// while ($counter >= 20) {
//     print "$counter" . PHP_EOL;
//     $counter--;
// }

// do {
//     print "$counter" . PHP_EOL;
//     $counter--;
// }
// while ($counter >= 20);

// for ($i=0; $i < 10; $i += 2) {
//     print "$i\n";
// }

// $country = "askjdhkjsahd";

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

// for ($i=0; $i < 20; $i++) { 
//     if ($i % 3 === 0) {
//         continue;
//     }
//     print "$i" . PHP_EOL;
//     if ($i === 17) {
//         break;
//     }
// }

// $country = "Niederlande";

// $capital = match ($country) {
//     "Niederlande" => "Amsterdam",
//     "Deutschland" => "Berlin",
//     "Costa Rica" => "San Jose",
//     "USA" => "Washington DC",
//     default => "Land nicht gefunden"
// };

// print $capital . PHP_EOL;

// ARRAYS
// $ourArray = [10, 8, 12];
// var_dump($ourArray);
// var_dump(array_is_list($ourArray));

// array_push($ourArray, 14, 16, 18, 20);

// $removed = array_pop($ourArray);

// var_dump($ourArray);
// var_dump($removed);

// print count($ourArray) . PHP_EOL;
// var_dump($ourArray);
// print $ourArray[-1];

// unset($ourArray[1]); // pop
// var_dump($ourArray);
// var_dump(array_is_list($ourArray));

// $fixedArray = array_values($ourArray);
// var_dump($fixedArray);

// for ($i=0; $i < count($fixedArray); $i++) { 
//     print $fixedArray[$i] . PHP_EOL;
// }

// foreach ($ourArray as $key => $value) {
//     print "$key => $value" . PHP_EOL;
// }

// function our_max(...$nums) {
//     $max = $nums[0];

//     foreach ($nums as $num) {
//         if ($num > $max) {
//             $max = $num;
//         }
//     }

//     return $max;
// }

// print our_max(-5, -3, -1). PHP_EOL;

// $ourArray = [10, 8, 12];
// $ourOtherArray = &$ourArray;

// $ourOtherArray[1] = 15;
// var_dump($ourArray); // ?

// $values = [
//     "jule" => 1234,
//     "stephan" => 342234,
//     "elena" => 234324,
//     "tochi" => 123123,
//     34 => "alexandra",
//     true => false,
// ];
// var_dump($values);

// $people = [
//     "person1" => ["id" => 54],
//     "person2" => ["id" => 23],
//     "person3" => ["id" => 3],
//     "person4" => ["id" => 17],
// ];

// $id = array_column($people, "id");
// array_multisort($id, SORT_DESC, $people);

// var_dump($people);

// $animals1 = ["lion" => "roar", "cat" => "meow"];
// $animals2 = ["cat" => "meow", "lion" => "roar"];

// $spreadArray = ["cow" => "moo", ...$animals1, ...$animals2];
// TODO: better and practical example where the spread operator shines
// var_dump($spreadArray);

// $values = [10, 8, 12, 14];

// [$jan, $feb] = $values;
// var_dump($jan);

// $nums = [5, 10, 20, 50];

// function ourFunc($n) {
//     return $n * 2;
// }

// $nums = [10, 40, 5, 13];
// Deklarativ
// $ourFunc = fn ($n) => $n * 2;
// var_dump(array_map($ourFunc, $nums));

// Imperativ
// $doubleArray = [];
// foreach ($nums as $num) {
//     array_push($doubleArray, $num * 2);
// }

// $sum_maker = fn ($temporaerer_speicher, $personRecord) => $temporaerer_speicher + $personRecord["id"];
// var_dump(array_reduce($complexData["angestellte"], $sum_maker, 0));

// 1. sum_maker(0, 78) => 78
// 2. sum_maker(78, 60) => 138
// 3. sum_maker(138, 62) => 200 => 200

// $complexData = [
//     "angestellte" =>
//     [
//         "person1" => [
//             "id" => "12",
//             "name" => "Peter"
//         ],
//         "person2" => [
//             "id" => "13",
//             "name" => "Olaf"
//         ],
//         "person3" => [
//             "id" => "12",
//             "name" => "Peter2"
//         ],
//         "person4" => [
//             "id" => "12",
//             "name" => "Peter3"
//         ]
//     ]
// ];

// $nums = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
// // Aufgabe: PHP-Skript, das für dieses Array Maximum, Minimum und Durchschnitt ermittelt. Sie sollen nur eine höherwertige Funktion nutzen.

// var_dump(array_reduce(
//     $nums, // 1. Array
//     fn ($carry, $num) => [ // 2. Funktion
//         "max" => $num > $carry["max"] ? $num : $carry["max"],
//         "min" => $num < $carry["min"] ? $num : $carry["min"],
//         "avg" => $carry["avg"] + $num / count($nums)
//     ],
//     ["max" => $nums[0], "min" => $nums[0], "avg" => 0] // 3. initial Wert
// ));

// TODO: Hintergrund zu den Vorzügen der funktionalen Programmierung

// if (file_exists("./data/dummy_data.txt")) {
//     file_put_contents("./data/dummy_data.txt", "overwritten");
// }
// else {
//     touch("./data/dummy_data.txt");
// }

// $nums = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

// $make_dummy_data = fn ($carry, $num) => $carry . $num . PHP_EOL;
// $dummyData = array_reduce($nums, $make_dummy_data, "");

// file_put_contents("./data/dummy_data.txt", $dummyData);

// print gettype(file_get_contents("./data/dummy_data.txt")) . PHP_EOL;

// $lines = file("./data/dummy_data.txt");

// foreach ($lines as $line) {
//     print $line;
// }

// unlink("./data/dummy_data.txt");

// foreach ($nums as $num) {
//     file_put_contents("./data/dummy_data.txt", $num . PHP_EOL, FILE_APPEND);
// }

/*
JSON = JavaScript Object Notation, *.json

Schreiben Sie ein PHP-Skript, dass das JSON `{"Title": "Sommer mit Fremden", "Author": "Taichi Yamada", "Detail": {"Publisher": "Goldmann"}}` dekodiert und wie folgt ausgibt:

Title: Sommer mit Fremden
Author: Taichi Yamada
Publisher: Goldmann
*/

// $data = [
//     "Title" => "Sommer mit Fremden",
//     "Author" => "Taichi Yamada",
//     "Detail" => [
//         "Publisher" => "Goldmann",
//         "Noch mehr infos" => "bla",
//         "noch mehr verschachtelt" => [
//             "sdkfjhs" => [
//                 "sdkjfghsdkhf" => [
//                     "ISBN" => "3249872364786",
//                     []
//                 ]
//             ]
//         ]
//     ]
// ];

// define("JSON_SNIPPET", json_encode($data)); // Konstante definieren
// $json_decoded = json_decode(JSON_SNIPPET, true); // In ein assoziatives Array dekodiert

// $print_key_value = fn ($val, $key) => print "$key: $val" . PHP_EOL; // Funktionsausdruck für die Ausgabe

// array_walk_recursive($json_decoded, $print_key_value); // Höherwertige Funktion

/*
Nutzen Sie die Informationen von https://www.php.net/manual/en/function.fgetcsv.php um die durchschnittliche Höhe aller Bäume im Kataster Köln zu ermitteln.
*/

function fancy_output($text) {
    $trees = ["🌲", "🌳", "🌴", "🎋"];
    $tree_output = function() use ($text, $trees) {
        for ($i=0; $i < strlen($text) / 2; $i++) { 
            print $trees[array_rand($trees, 1)];
        }
        print PHP_EOL;
    };
    
    print PHP_EOL;
    $tree_output();
    print $text . PHP_EOL;
    $tree_output();
    print PHP_EOL;
}

define("KEY_HEIGHT", 15);
define("SKIP_ROWS", 1);

$sum = 0;
$rows = 0;

if (($handle = fopen("./data/baumbestand_koeln_2020.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, separator: ";")) !== FALSE) {
        $rows++;

        // Skip CSV header
        if ($rows <= SKIP_ROWS) {
            continue;
        }

        // I had to manually find out that tree height is stored in key 15
        // (and is not called `H_HE` but `HHE`; data sources and docs are unreliable!)
        $sum += $data[KEY_HEIGHT];
    }

    $meanHeight = $sum / ($rows - $skipRows);

    fancy_output("Durchschnittliche Baumhöhe: $meanHeight");

    fclose($handle);
}