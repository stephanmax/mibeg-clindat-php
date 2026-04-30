<?php
/**
 * 1. Datenquelle: data/baumbestand_koeln_2020.csv
 *  - CSV-Datei = comma-separated values
 * 2. Daten in der CSV-Datei in eine Datenbank laden
 *  - DBMS = Database Management System = SQLite (simple, Dateien-basierte MySQL-Alternative)
 *  - Gründe: Sicherheit vor Datenverlust bzgl. Zugriff
 * 3. Ab hier arbeiten wir nur noch mit der Datenbank und nicht mehr mit der Datei
 *    Ab jetzt können wir Anfragen an die Datenbank schicken.
 */

// Konstanten für Bequemlichkeit und weniger Tippen
define("DATA_SOURCE", "data/baumbestand_koeln_2020.csv");
define("DATA_TARGET", "data/trees_of_cologne.sqlite");

// SQLite-Datenbank anlegen
$connection = new PDO("sqlite:" . DATA_TARGET);

// 3-Zutaten-SQL-Rezept
$sql = "CREATE TABLE IF NOT EXISTS trees (id integer PRIMARY KEY, height integer, germanName text)";
$statement = $connection->prepare($sql);
$statement->execute();

define("KEY_ID", 0);
define("KEY_HEIGHT", 15);
define("KEY_NAME", 22);
define("SKIP_ROWS", 1);

$file = fopen(DATA_SOURCE, "r");

// Wiederholung erfordert Schleifen
// while, do/while, for

$rows = 0;

while (($data = fgetcsv($file, separator: ";")) !== false) {
    $rows++;

    if ($rows <= SKIP_ROWS) {
        continue; // Überspringen
    }

    $id = $data[KEY_ID];
    $height = $data[KEY_HEIGHT];
    $germanName = $data[KEY_NAME];

    $sql = "INSERT INTO trees (id, height, germanName) VALUES (?, ?, ?)";
    $statement2 = $connection->prepare($sql);
    $statement2->execute([$id, $height, $germanName]);

    print "Stored '$germanName' with height $height m." . PHP_EOL;
}