<?php
$db = new SQLite3('./data/analytics.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);
$db->enableExceptions(true);

// Tabelle erstellen mit  SQL-Code
$db->query('CREATE TABLE IF NOT EXISTS "visits" (
    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    "user_id" INTEGER,
    "url" VARCHAR,
    "time" DATETIME
)');

// Beispieldaten innerhalb einer Transaction (BEGIN / END) einfügen
$db->exec('BEGIN');
$db->query('INSERT INTO "visits" ("user_id", "url", "time")
    VALUES (42, "/test", "2017-01-14 10:11:23")');
$db->query('INSERT INTO "visits" ("user_id", "url", "time")
    VALUES (42, "/test2", "2017-01-14 10:11:44")');
$db->query('INSERT INTO "visits" ("user_id", "url", "time")
    VALUES (1337, "/test2", "2017-01-15 10:12:37")');
$db->exec('COMMIT');

// Daten auslesen
$statement = $db->prepare('SELECT * FROM "visits" WHERE "user_id" = ? AND "time" >= ?');
$statement->bindValue(1, 42);
$statement->bindValue(2, '2017-01-14');
$result = $statement->execute();

print "Ergebnis als assoziatives Array:\n";
print_r($result->fetchArray(SQLITE3_ASSOC));
print "\n";

print "Ergebnis als Listen-Array:\n";
print_r($result->fetchArray(SQLITE3_NUM));
print "\n";

// Speicher freigeben
$result->finalize();

// Einzelne Werte berechnen
$userCount = $db->querySingle('SELECT COUNT(DISTINCT "user_id") FROM "visits"');

print "Anzahl verschiedener Besucher: $userCount\n";
print "\n";

// Datenbankverbindung schließen (passiert auch automatisch)
$db->close();