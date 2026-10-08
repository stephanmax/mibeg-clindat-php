<?php

define("FILENAME", "data/demo.db");
$connection = new PDO('sqlite:' . FILENAME);

// === Simple Querying

// foreach ($connection->query("SELECT * FROM trees") as $row) {
//     print $row["id"] . ", " . $row["height"] . ", " . $row["germanName"] . PHP_EOL;
// }

// $statement = $connection->query("SELECT MAX(height) FROM trees");
// $result = $statement->fetch();

// var_dump($result);

// === Prepared Statements

// ====== mit anonymen Parametern

// $sql = "SELECT germanName, height FROM trees WHERE height > ?"; // 1
// $statement = $connection->prepare($sql); // 2
// $statement->execute([30]); // 3

// while ($row = $statement->fetch()) {
//     print $row["germanName"] . " (" . $row["height"] . " m)" . PHP_EOL;
// }

// ====== mit benannten Parametern

// $sql = "SELECT germanName, height FROM trees WHERE height > :minHeight"; // 1
// $statement = $connection->prepare($sql); // 2
// $statement->execute([
//     "minHeight" => 10
// ]); // 3

// while ($row = $statement->fetch()) {
//     print $row["germanName"] . " (" . $row["height"] . " m)" . PHP_EOL;
// }

// ====== mit benannten Einzelergebnissen

$sql = "SELECT COUNT(*) as num FROM trees WHERE height > ?"; // 1
$stmt = $connection->prepare($sql); // 2
$stmt->execute([15]); // 3

$result = $stmt->fetch();

print $result['num'] . " Bäume sind über 15 m hoch." . PHP_EOL;