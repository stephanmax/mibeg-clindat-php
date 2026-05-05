<?php

/**
 * Arbeit mit einem DBMS
 * 
 * 1. Verbindung zur Datenbank (DB) herstellen
 * 2. Datenbank-Anfragen (Queries)
 * 3. Ergebnisse der Anfragen (Queries) verarbeiten/ausgeben/etc.
 */

// 1.
$connection = new PDO("sqlite:trees.sqlite");

// PDO = PHP Data Objetcs; Bibliothek (library), die uns viel Arbeit abnimmt
// zum Beispiel: Vorbereiten von Queries (prepare), Sicherheitsaspekte (SQL injection)

// 2.
$sql = "SELECT DISTINCT germanName FROM trees"; // a = SQL formulieren
$stmt = $connection->prepare($sql); // b = Query vorbereiten
$stmt->execute(); // c = Query ausführen und gegegbenenfalls mit Werten befüllen

// 3.
$results = $stmt->fetchAll(PDO::FETCH_COLUMN);
var_dump($results);