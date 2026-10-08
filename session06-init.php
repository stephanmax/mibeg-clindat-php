<?php

// PDO = PHP Data Objects
$connection = new PDO('sqlite:data/demo.db');

// 1: SQL formulieren
$sql = "CREATE TABLE IF NOT EXISTS trees (id integer PRIMARY KEY, height float, germanName text)";

// 2: Vorbereitung
$statement = $connection->prepare($sql);

// 3: Ausführung der Query/des Befehls
$statement->execute();

$handle = fopen("data/baumbestand_koeln_2020.csv", "r");

define("KEY_ID", 0);
define("KEY_HEIGHT", 15);
define("KEY_GERMAN_NAME", 22);

define("SKIP_ROWS", 1);

$rowsRead = 0;
$numRows = 10000 + SKIP_ROWS;

while ($rowsRead < $numRows && ($data = fgetcsv($handle, separator: ";")) !== false) {
    $rowsRead++;

    if ($rowsRead <= SKIP_ROWS) {
        continue;
    }
    
    $id = $data[KEY_ID];
    $height = $data[KEY_HEIGHT];
    $germanName = $data[KEY_GERMAN_NAME];

    // 1: SQL formulieren
    $sql = "INSERT INTO trees (id, height, germanName) VALUES (?, ?, ?)";

    // 2: Vorbereitung
    $statement = $connection->prepare($sql);

    // 3: Ausführung der Query/des Befehls
    $statement->execute([(int)$id, (float)$height, $germanName]);

    print "Stored '$germanName' with height $height m." . PHP_EOL;
}