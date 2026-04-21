<?php

define('FILENAME', 'data/demo.db');
$connection = new PDO('sqlite:' . FILENAME);

// $sql = "SELECT germanName, height FROM trees WHERE height > :minHeight"; // 1
// $stmt = $connection->prepare($sql); // 2
// $stmt->execute(["minHeight" => 30]); // 3

// while ($row = $stmt->fetch())
// {
//     print $row["germanName"] . " (" . $row["height"] . " m)" . PHP_EOL;
// }

$stmt = $connection->query("SELECT MAX(height) FROM trees");
$result = $stmt->fetch();

var_dump($result);

/**
 * Aufgaben: Data Wrangling / Exploration
 * 
 * - Wie viele Bäume haben keinen Namen?
 * - Wie viele Bäume haben keine Höhe?
 * - Wie viele Bäume haben eine unglaubwürdige Höhe?
 * - Was ist die durchschnittliche Höhe aller Bäume mit glaubwürdiger Höhe?
 * - Welche Baumart ist die häufigste?
 */